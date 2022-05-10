@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">เพิ่มสินค้า</div>
                    <div style="text-align: center">
                        @if (session('status'))
                            <strong style="color: #0d6efd">{{ session('status') }}</strong>
                        @endif
                    </div>
                    <div class="card-body">
                        
                        <form  method="post"  action="{{route('stock.store' )}}"  enctype="multipart/form-data">
                            
                            @csrf

                         
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('ร้านค้า') }}</label>
                                 <div class="col-md-6">
                                    <input id="store" type="text" 
                                    class="form-control @error('store') is-invalid @enderror" name="store"
                                    value="" required  autofocus>     
                                </div>
                            </div> 
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('รูปภาพ') }}</label>
                                 <div class="col-md-6">
                                    <input id="picture" type="file" 
                                    class="form-control @error('picture') is-invalid @enderror" name="picture"
                                    value="" required  autofocus>     
                                </div>
                            </div> 
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('ราคาสินค้า') }}</label>
                                 <div class="col-md-6">
                                    <input id="price" type="text"
                                    class="form-control @error('price') is-invalid @enderror" name="price"
                                    value="" required  autofocus>     
                                </div>
                            </div> 
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('เปอร์เช็นต์') }}</label>
                                 <div class="col-md-6">
                                    <input id="percent" type="text" 
                                    class="form-control @error('percent') is-invalid @enderror" name="percent"
                                    value="" required  autofocus>     
                                </div>
                            </div> 
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('รายได้ที่ได้') }}</label>
                                 <div class="col-md-6">
                                    <input id="income" type="text" 
                                    class="form-control @error('income') is-invalid @enderror" name="income"
                                    value="" required  autofocus>     
                                </div>
                            </div> 
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('เลือก user') }}</label>
                                 <div class="col-md-6">
                                    <select class="form-select" name="status_user" aria-label="Default select example">
                                        @foreach ($user as $user)
                                        <option value="{{$user->id}}" >{{$user->username}}</option>
                                        @endforeach
                                      </select>  
                                </div>
                            </div> 
                           
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4" id="submit_from">
                                    <button type="submit"  class="btn btn-primary">
                                        {{ __('บันทึกข้อมูล') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection


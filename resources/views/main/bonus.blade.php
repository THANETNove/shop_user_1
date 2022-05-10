@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">โบนัสที่ได้</div>
                    <div style="text-align: center">
                        @if (session('status'))
                            <strong style="color: #0d6efd">{{ session('status') }}</strong>
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="" method="POST"  action="{{route('product.store' )}}">
                            @csrf
                         
                                      
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('จำนวนขันต่ำที่เติม') }}</label>
                                 <div class="col-md-6">
                                    <input id="bonus" type="number" min="0"
                                    class="form-control @error('bonus') is-invalid @enderror" name="percentUser"
                                    value="" required placeholder="จำนวน" autofocus>
                                    
                                </div>
                            </div>     
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('จำนวนที่จะได้') }}</label>
                                 <div class="col-md-6">
                                    <input id="bonus" type="number" min="0"
                                    class="form-control @error('bonus') is-invalid @enderror" name="bonus"
                                    value="" required placeholder="จำนวน" autofocus>
                                    
                                </div>
                            </div>               
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>
                                 <div class="col-md-6">
                                    <select class="form-select" aria-label="Default select example" name="percent">
                                        @foreach ($user as $line)
                                        <option value="{{ $line->id }}">{{ $line->username }} </option>
                                        @endforeach
                                      </select>
                                </div>
                            </div>              
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4" id="submit_from">
                                    <button type="submit"  class="btn btn-primary">
                                        {{ __('จำนวน') }}
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


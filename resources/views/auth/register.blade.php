<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.hade')
</head>
<body class="login">
    <br>
    <br>
    <div class="offcanvas-body ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 ">
                    <div class="logo-center">
                        <img src="{{ asset('/image/8XdGol.png') }}" class="logo-img" alt="...">
                    </div>
                    <br>
                    <div class="logo-center">
                    </div class="logo-center">
                    <div class="container">
                        <div class="row justify-content-center">

                            <div class="col-md-8" id="form-subscribe">
                                <div class="loinText logo-center">
                                    <p>ลงทะเบียน</p>
                                </div>
                                <div>
                                    <div>
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
    
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <input id="username" type="text" class="form-control  color55 color56  contact  @error('username') is-invalid @enderror" name="username" value="{{ old('name') }}" required placeholder="กรุณากรอกชื่อผู้ใช้" autofocus> 
                                                    @error('username')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span> 
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3" style="display:none">
                                                <div class="col-md-12">
                                                    <input id="is_admin" type="text" class="form-control contact @error('is_admin') is-invalid @enderror" name="is_admin" value="0" required > 
                                                    @error('is_admin')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span> @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <input id="invitation" type="text" class="form-control color55 color56  contact @error('invitation') is-invalid @enderror" name="invitation" required placeholder="กรุณากรอกรหัสคำเชิญ"> 
                                                    @error('invitation')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>ไม่พบ รหัสคำเชิญนี้ในระบบ</strong>
                                                        </span> @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <input id="password" type="password" class="form-control color55 color56  contact @error('password') is-invalid @enderror" name="password" required placeholder="กรุณากรอก password" autocomplete="new-password"> @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span> @enderror
                                                </div>
                                            </div>
    
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <input id="password-confirm" type="password" class="form-control color55 color56  contact" name="password_confirmation" required placeholder="ยื่นยัน password" autocomplete="new-password">
                                                </div>
                                            </div>
    
                                            <div class="row mb-0">
                                                <div class="d-grid gap-2 logo-center">
                                                    <button type="submit" class="btn btn-primary contact  color57 color58">
                                                        {{ __('ลงทะเบียน') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <br>
                                <div class="logo-center">
                                    <a href="login" class="text-decoration"> 
                                        <p class="colorText"  style="font-size: 20px"> <- go back</p>
                                   </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>
@include('layouts.js')
</html>

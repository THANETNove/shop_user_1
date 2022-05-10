{{-- <div class="footer">
    <div class="container">
        <div class="row row-cols-auto">
          <div class="col-2 col-sm-2 col-md-2">
                <i class="fa-solid fa-house-chimney active navbarFooter" id="home" value="null" style='font-size:28px'>
                <br>
              <span class="icon-text">บ้าน</span>
              </i>
            </div>
          <div class="col-2 col-sm-2 col-md-3">
              <a href="{{ URL::to('topUp')}}" class="text-decoration">
                <i class="fa-solid fa-location-dot "   style='font-size:28px'>
                  <br>
                  <span class="icon-text">เติมเงิน</span>
                </i>
              </a>
            </div>
            <div class="col-3 col-sm-3 col-md-2">
                <a href="{{ URL::to('shop_index')}}" class="text-decoration">
                   <div class="icon-center ">
                  <i class="fas fa-bolt  icon-wi"  style='font-size:32px'></i>
                  <p class="text-color">คว้า</p>
                 </div> 
                </a>
               
            </div>
          <div class="col-2 col-sm-2  col-md-2"> 
              <i class="fa-solid fa-gift navbarFooter" style='font-size:28px'>
                <br>
                <span class="icon-text">คำสั่ง</span>
              </i>
            </div>
            <div class="col-3 col-sm-3 col-md-2"> 
                <i class="fa-solid fa-user navbarFooter" id="user"  value="{{$name}}" style='font-size:28px'>
                  <br>
                  <span class="icon-text">บัญชี</span>
                </i>
            </div>
        </div>
      </div>
</div> --}}

<div class="footer">
  <div class="container">
      <div class="row row-cols-auto">
        <div class="col-3 col-sm-3 col-md-3">
              <i class="fa-solid fa-house-chimney active navbarFooter" id="home" value="null" style='font-size:28px'>
              <br>
            <span class="icon-text">หน้าหลัก</span>
            </i>
          </div>
        <div class="col-3 col-sm-3 col-md-3 ">
            <i class="fa-solid fa-location-dot navbarFooter"  id="location"  value="{{$name}}" style='font-size:28px'>
              <br>
              <span class="icon-text">รายชื่อธุรกิจ</span>
            </i>
          </div>
        <div class="col-3 col-sm-3  col-md-3"> 
            <i class="fa-solid fa-gift navbarFooter" id="gift"  value="{{$name}}" style='font-size:28px'>
              <br>
              <span class="icon-text">ของขวัญ</span>
            </i>
          </div>
          <div class="col-3 col-sm-3 col-md-3"> 
              <i class="fa-solid fa-user navbarFooter" id="user"  value="{{$name}}" style='font-size:28px'>
                <br>
                <span class="icon-text">ข้อมูลของฉัน</span>
              </i>
          </div>
      </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="row row-cols-auto">
          <div class="col-2 col-sm-2 col-md-2">
              <a href="{{ URL::to('/')}}" class="text-decoration">
                <i class="fa-solid fa-house-chimney active navbarFooter" id="home" value="null" style='font-size:28px'>
                    <br>
                  <span class="icon-text">บ้าน</span>
                  </i>
              </a>
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
                    <i class="fas fa-bolt icon-wi" style='font-size:32px'></i>
                    <p class="text-color">คว้า</p>
                   </div> 
                </a>
               
            </div>
          <div class="col-2 col-sm-2  col-md-2"> 
              <i class="fa-solid fa-gift navbarFooter" id="gift"   style='font-size:28px'>
                <br>
                <span class="icon-text">คำสั่ง</span>
              </i>
            </div>
            <div class="col-3 col-sm-3 col-md-2"> 
                <a  href="{{ URL::to('user')}}" class="text-decoration">  
                     <i class="fa-solid fa-user navbarFooter" id="user"  style='font-size:28px'>
                    <br>
                    <span class="icon-text">บัญชี</span>
                  </i></a>
            </div>
        </div>
      </div>
</div>
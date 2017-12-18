
<header> 
    <div class="container ">
      <div class="row">
      <div class="logo col-sm-7 col-xs-12">
        <a href="index.php">LoGo</a>
      </div>
      <div class=" col-sm-5 col-xs-12 " style="margin-bottom: 5px">
        <div class="info-1">
          <?php
                            if(!isset($_SESSION['login_member']))
                            {
                        ?>
          <ul>
            <li>
              <a  href="index.php?page=login">Đăng nhập</a>
            </li>
            <li><a href="index.php?page=register" >Đăng ký</a></li>
          </ul>
          <?php
                            }
                            else
                            {
                                $query= "select * from khachhang where username='".$_SESSION['username']."'";
                                $rows=$db->query($query);
                                $r=$rows->fetch();
                        ?>
                            <ul id="shopnav" class="shop-menu">
                            <li>
                                Xin chào: 
                                
                                    <?php
                                        echo $r[2];
                                    ?>
                                                
                            </li>
                            
                            <li>
                                <a href="index.php?page=logout">
                                    Thoát
                                </a>
                            </li>
                        </ul>
                        <?php
                            }
                        ?>
        </div>
        <div class="info-2">
          <a href="#cart"  onclick="document.getElementById('cart').style.display='block'">
              <img src="Image/cart.png" title="Giỏ hàng" class="imgcart"> 
          </a>
        </div>
      </div>
      </div>


      <div class="row bot col-sm-12 col-xs-12">
        <div class="search">
          <form>
            <span style="font-size: 20px;">Tìm kiếm: </span>
            <input type="search" name="search" placeholder="Nhập nội dung cần tìm..." ">
            <span class="glyphicon glyphicon-search"></span>
          </form>
        </div>
      </div>
      
      </div>
 </header>
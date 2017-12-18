 <div class="span9">
    <div class="content">
        <div class="btn-controls">
            <div class="btn-box-row row-fluid">
                <a href="?page=order" class="btn-box big span4">
                  <i class="icon-save"></i>
                <p class="text-muted">Đơn hàng</p>
                </a>
                <a href="?page=thanhvien" class="btn-box big span4">
                  <i class="icon-user"></i><b>  
                    <?php
                    $q1 = "select count(*) from khachhang";
                    $rs1 = $db->query($q1);
                    $kh = $rs1->fetch()[0]; 
                    echo $kh;
                  ?>
                  </b>
                <p class="text-muted">Thành viên</p></a>
                <a href="?page=dssp" class="btn-box big span4">
                  <i class="icon-table"></i>
                <p class="text-muted">Sản phẩm</p>
                </a>
            </div>
            <div class="btn-box-row row-fluid">
              <a href="?page=tinnhan" class="btn-box big span4">
                <i class="icon-envelope"></i>
                <b><?php
                        $q = "select count(*) from phanhoi";
                        $rs = $db->query($q);
                        $tn = $rs->fetch()[0]; 
                        echo $tn;
                ?></b>
              <p class="text-muted">Tin nhắn</p>
              </a>
            </div>
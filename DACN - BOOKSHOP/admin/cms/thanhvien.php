             <div class="span9">
                 <div class="content">
                   <div class="module">
                      <div class="module-head">
                        <h3>Danh sách thành viên</h3>
                      </div>
                       
                       <?php
                            $query = "select * from khachhang order by username desc ";
                            $rows=$db->query($query);
                            echo "<table class='table'>";
                            echo "<tr>"
                                    . "<th>Họ tên</th>"
                                    . "<th>Email</th>"
                                    . "<th>Địa chỉ</th>"
                                    . "<th>Số điện thoại</th>"
                                    . "<th>Ngày tạo</th>"
                                 . "</tr>";
                            foreach($rows as $r) 
                            {                
                                echo "<tr>"
                                        . "<td>
                                        <a href='?page=orderkh&username=".$r[0]."'>$r[2]</a>
                                        </td>"
                                        . "<td>$r[4]</td>"
                                        . "<td>$r[3]</td>"
                                         . "<td>$r[5]</td>"
                                            . "<td>$r[6]</td>"
                                     . "</tr>";

                            }
				
                            echo "</table>";

                            ?>


                                           </div> 
                                     </div>
                                 </div>


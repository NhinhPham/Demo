<div class="contentr">
                <div class="dangxuat">
                    <input type="submit" value="Dang xuat"></div>
                
                <div class="contentdow">
                    <div class="title">
                        Danh sách tài Khoản
                    </div>
                    <div class="element-button">
                        <form action="index.php?act=listaccount" method="post" enctype="multipart/form-data">
                          
                        
                        </form>
                        <div class="talble">
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã Tài khoản</th>
                                <th>user Name</th>
                                <th>Mật Khẩu</th>
                                <th>Ảnh</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>Số Điện Thoại</th>
                                <th>Vai trò</th>
                                <th>Công Cụ</th>
                            </tr>
                            <?php

                            foreach($list_account as $ac){
                                extract($ac);
                                $suaac="index.php?act=suaac&id=".$id;
                                $xoaac="index.php?act=xoaac&id=".$id;
                                echo '<tr>
                                <td><input type="checkbox" name="name[]" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$user.'</td>
                                <td>'.$pass.'</td>
                                <td><img src="'.$img.'" style="width: 100px;" alt=""></td>
                                <td>'.$email.'</td>
                                <td>'.$dress.'</td>
                                <td>'.$phone.'</td>
                                <td>'.$role.'</td>
                                <td>
                                     <a href="'.$suaac.'">
                                    <input type="button" value="Sua"></a>
                                    <a href="'.$xoaac.'" >
                                    <input type="button" value="Xoa"></a>
                                </td>
                            </tr>';

                            }
                            ?>

                            
                            

                            
                        </table>
                        <div class="but">
                        <input type="submit"  name="all" value="Chọn tất cả"> 
                        <input type="submit"  name="one" value="Bỏ chọn tất cả"> 
                        <a href="index.php?act=kh"><input type="button" value="Tạo Một tài khoản mới"> 
                        </div>

                           

                        </div>
                       

                     
                    </div>
                        

                    </div>
                </div>

            </div>
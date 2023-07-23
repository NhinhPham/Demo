<div class="contentr">
                <div class="dangxuat">
                    <input type="submit" value="Dang xuat"></div>
                
                <div class="contentdow">
                    <div class="title">
                    Danh sách Bình luận
                    </div>
                    <div class="element-button">
                        <form action="index.php?act=listsp" method="post">
                          
                        
                        </form>
                        <div class="talble">
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã Bình luận</th>
                                <th>Mã tài khoản</th>
                                <th>Mã sản phẩm </th>
                                <th>Ngày bình luận </th>
                                <th>Nội dung </th>
                            </tr>
                            <?php

                            foreach($listbinhluan as $bl){
                                extract($bl);
                                $xoabl="index.php?act=xoabl&id=".$id;
                                echo '<tr>
                                <td><input type="checkbox" name="name[]" id=""></td>
                                <td>'.$id.'</td>
                                <td>'.$id_user.'</td>
                                <td>'.$id_product.'</td>
                                <td>'.$date_comment.'</td>
                                <td>'.$Content.'</td>
                                <td>
                                    
                                    <a href="'.$xoabl.'" >
                                    <input type="button" value="Xoa"></a>
                                </td>
                            </tr>';

                            }
                            ?>

                            
                            

                            
                        </table>
                        <div class="but">
                        <input type="submit"  name="all" value="Chọn tất cả"> 
                        <input type="submit"  name="one" value="Bỏ chọn tất cả"> 
                        </div>

                           

                        </div>
                       

                     
                    </div>
                        

                    </div>
                </div>

            </div>
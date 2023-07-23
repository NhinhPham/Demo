<div class="contentr">
    <div class="dangxuat">
        <input type="submit" value="Dang xuat">
    </div>

    <div class="contentdow">
        <div class="title">
            Tạo một tài khoản mới
        </div>
        <div class="element-button">

            <form action="index.php?act=kh" method="post" enctype="multipart/form-data">
                
                    <label for="">User Name</label><br>
                    <input type="text" name="user"><br>
                    <label for="">Mật Khẩu</label><br>
                    <input type="text" name="pass"><br>
                    <label for="">Email</label><br>
                    <input type="email" name="email"><br>
                    
                    <label for=""> Admin (1) or Khách Hàng (2)</label><br>
                    <input type="role" name="role"><br>

                    <label for="">Ảnh</label><br>
                    <input type="file" name="img" id="img"><br>
                    <label for="">Địa chỉ</label><br>
                    <input type="text" name="dress"><br>
                    <label for="">số Điện Thoại</label><br>
                    <input type="number" name="phone"><br>
                </div>
                <div class="but">
                    <input type="submit" name="themmoi" value="Thêm Mới">
                    <input type="reset" value="Nhaplai">
                    <a href="index.php?act=listaccount"><input type="button" value="Danh Sách">


                </div>

                <?php
                        if(isset($thongbao)&&($thongbao!=""))
                        echo $thongbao;
                                
                         ?>
            </form>
        </div>





    </div>


</div>
</div>

</div>
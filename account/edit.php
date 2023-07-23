<?php
if(is_array($account)){
    extract($account);
}



?>

<div class="contentr">
    <div class="dangxuat">
        <input type="submit" value="Dang xuat">
    </div>

    <div class="contentdow">
        <div class="title">
            Sửa Tài Khoản 
        </div>
        <div class="element-button">

            <form action="index.php?act=updateaccount" method="post" enctype="multipart/form-data">
                    <label for="">User Name</label><br>
                    <input type="text" name="user" value="<?php echo $account['user'] ?>"><br>
                    <label for="">Password</label><br>
                    <input type="text" name="pass" value="<?php echo $account['pass'] ?>"><br>
                    <label for="">Email</label><br>
                    <input type="email" name="email" value="<?php echo $account['email'] ?>"><br>
                    <label for="">Địa chỉ</label><br>
                    <input type="text" name="dress" value="<?php echo $account['dress'] ?>"><br>
                    <label for="">Vai Trò</label><br>
                    <input type="number" name="role" value="<?php echo $account['role'] ?>"><br>
                    

                    <label for="">Ảnh sản phẩm</label><br>
                    <input type="file" name="img" id="img" value="<?php echo $account['img'] ?>"><br>


                    <label for="">Phone</label><br>
                    <input type="number" name="phone" value="<?php echo $account['phone'] ?>" ><br>
                </div>
                <div class="but">
                    <input type="hidden" name="id" value=" <?php echo $account['id'] ?>">
                    <input type="submit" name="capnhat" value="Cập Nhật">
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
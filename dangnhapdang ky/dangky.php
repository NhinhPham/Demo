<style>
  body{
    
    background-image: url("../demo.snstheme.com/img/5d62b49ac544b_thumb900.webp");
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
  }
.box{
    display: flex;
    justify-content: center;
    min-height: 90vh;


  }
  .dangky{
    width: 350px;
    display: flex;
    flex-direction: column;
    padding: 0 15px 0 15px;
  }
h2{
    font-size: 30px;
    text-align: center;
    padding: 10px 0 10px 0;
  }
  .input-field{
    display: flex;
    flex-direction: column;

  }
.input-dangnhap{
    height: 45px;
    width: 100%;
    border: none;
    outline: none;
    border-radius:30px;
    color:black;
    margin: 25px 0;
    background:rgb(255,255,255,0.5);
  }
i{
    position: relative;
    top: -33px;
    left: 17px;
    color: #fff;
  }
  ::-webkit-input-placeholder{
    color: black;
  }
  .submit-dangnhap{
    border: none;
    border-radius: 30px;
    font-size: 15px;
    height: 45px;
    outline: none;
    width: 100%;
    background:rgb(255,255,255,0,9);
    cursor: pointer;
    transition: 0.3s;
  }
  .submit-dangnhap:hover{
    box-shadow: 1px 5px 7 1px rgb(0, 0, 0,0.2);

  }
  .botton{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    font-size: small;
    margin-top: 10px;
  }
  .left{
    display: flex;
  }
  label a{
    text-decoration: none;
  }
</style>
<div id="sns_content">
    <div class="box">
    <div class="dangky">
        <h2>Đăng Ký tài khoản</h2>
        <form action="index.php?act=dangky" method="post">
        <div class="input-field">
            <input type="text" class="input-dangnhap" placeholder="Tên Đăng Nhập" name="user" required>
            <i class="bx bx-user"></i>
        </div>
        <div class="input-field">
            <input type="password" class="input-dangnhap" placeholder="Mật Khẩu" name="pass" required>

            <i class="bx box-lock-alt"></i>
        </div>
        <div class="input-field">
            <input type="email" class="input-dangnhap" placeholder="email" name="email" required>
            <i class="bx box-lock-alt"></i>
        </div>
        
        <div class="input-field">
            <input type="text" class="input-dangnhap" placeholder="Địa chỉ" name="dress" required>
        </div>
        <div class="input-field">
            <input type="number" class="input-dangnhap" placeholder="Số Điện Thoại" name="phone" required>
</div>
        <div class="input-field">
            <input type="submit" class="submit-dangnhap" name="dangky" value="Đăng Ký">
        </div>
        <div class="botton">
        <div class="right">
            <label><a href="index.php?act=dangnhap">Đăng Nhập</a></label>
        </div>
    </div>

    <?php
                        if(isset($thongbao)&&($thongbao!=""))
                        echo $thongbao;
                                
                         ?>
</form>

    </div>
</div>

</div>
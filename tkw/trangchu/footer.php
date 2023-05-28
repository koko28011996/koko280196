<footer>
            <div class="trai">
                <a href="">
                    <img src="./img/logo.png" alt="">
                    <div class="logo">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-youtube"></i>
                </div>
                </a>
                <div class="lienhe">
                    <h2> Thông tin Liên Hệ</h2>
                    <p>Điện thoại</p>
                    <p>0926755061</p>
                </div>
                
            </div>
            <div class="giua">
                <h2>Hướng Dẫn Mua Hàng</h2>
                <nav>
                    <ul>
                        <li><a href="#">Trang Chủ</a></li>
                        <li><a href="#">Liên Hệ</a></li>
                        <li><a href="#">Góp Ý</a></li>
                        <li><a href="#">Giải Đáp</a></li>
                    </ul>
                </nav>
            </div>
            
            <div class="phai">
                <h2>Cơ Sở Hỗ Trợ Khách Hàng</h2>
                <a href=""><h4>Cơ Sở tại Hà Nội</h4></a>
                <p>Ngõ 155 Phường Phương Canh Nam Từ Liêm Hà Nội</p>

                <a href=""><h4>Cơ Sở tại Đà Nẵng</h4></a>
                <p>Ngõ 155 Phường Phương Canh Nam Từ Liêm Hà Nội</p>

                <a href=""><h4>Cơ Sở tại Thành Phố Hồ Chí Minh</h4></a>
                <p>Ngõ 155 Phường Phương Canh Nam Từ Liêm Hà Nội</p>
                
            </div>

            

        </footer>
        <!-- js cho slide show -->
        <script>
            
            let slideIndex = 0;
            showSlides();

            function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            slides[slideIndex-1].style.display = "block";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>

</div>
    
</body>
</html>
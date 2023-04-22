ĐỒ ÁN CUỐI KÌ MÔN LẬP TRÌNH WEB VÀ ỨNG DỤNG
--
## Cấu trúc đồ án:
-  Tập tin database.sql chứa cơ sở dữ liệu của đã chứa câu lệnh tạo database giảng viên có thể import được ngay mà không cần tạo database trước.

-  Báo cáo: trình bày phần phân tích, thiết kế hệ thống, thiết kế giao diện thực tế kèm diễn giải và link đến phần thiết kế giao diện thật.

-  Bản tự đánh giá: cuối file là bảng phân công công việc của nhóm.

-  Bản khảo sát yêu cầu: chứa bản khảo sát chức năng của hệ thống tham khảo

-  Thư mục source chứa source code chính của đồ án:
   ĐỒ ÁN ĐƯỢC XÂY DỰNG DỰA TRÊN MÔ HÌNH MVC
    * thư mục assets: gồm các thư mục hình, js, css để xây dựng trang web.
    Trong đó gồm:
    **Folder Style: chứa các file css.
    **Folder Images: chứa các hình ảnh để xây dựng trang web và lưu hình ảnh tải lên
    **Folder Scripts: chứa các file js.

    * thư mục Controllers: gồm các file xử lí yêu cầu người dùng đứa đến thông qua View. Một Controller bao gồm cả Model và View, sau khi nhận input và thực hiện update tương ứng
    
    * thư mục Models: là bộ phân có chức năng lưu trữ toàn bộ dữ liệu ủa hệ thống là cầu nối giữa View và Controller.

    * thư mục Views: chứa các file phần giao diện dành cho người sử dụng. 

    * file index.php: file này để chạy trang chủ mặc định của hệ thống.

## CHẠY ĐỒ ÁN
- Set up Xampp:
- Giảng viên import file database.sql trên webserver.
- Kiểm tra tài khoản người dùng trên webserver có trùng khớp thông tin đã nhập trong file connection.php.
    $host = 'localhost'; // tên mysql server
    $user = 'root';
    $pass = 'root';
    $db = 'webtimviec'; // tên databse đã tạo sẵn
- Sử dụng liên kết : http://localhost/index.php sẽ về được trang chủ
- Giảng viên có thể đăng ký tài khoản hoặc sử dụng tài khoản đã có sẵn trong database
+ Tài khoản nhà tuyển dụng: admin/123456
+ Tài khoản người tìm việc: user/123456

- Đối với tài khoản NTD:
+ Đã có các chức năng đăng tuyển, duyệt ứng viên, mời ứng viên, chỉnh sửa thông tin, trang thông tin của công ty, tìm kiếm ứng viên, kiểm tra ứng viên đã duyệt, lưu ứng viên quan tâm, xem trang cá nhân NTV

- Đối với tài khoản NTV:
+ Đã có các chức năng chỉnh sửa thông tin, trang cá nhân, tìm kiếm công việc, tạo cv, ứng tuyển, duyệt lời mời công việc, lưu công việc quan tâm, kiểm tra lời mời đã duyệt, xem trang cá nhận NTD, đổi mật khẩu bằng mã otp qua mail (sử dụng mail thật)

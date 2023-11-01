canvas = document.getElementById('mycanvas');
canvas.style.backgroundColor = '#B6B6B6'
ct = canvas.getContext("2d");
// getContext Dùng Để gọi Tất Cả các hamg trong canvas
// Thuộc Tính fillRect(x, y, width, height) dùng để thiết lập một khung hình có màu
// Thuộc Tính fillStyle Dùng để thiết lập màu(giống backgroup-color)


// ct.fillStyle = 'blue';

// ct.fillRect(20,20,50,100);

// thuộc tính StrokeStyle Dùng để thiết lập đường viền
// thuộc tính lineWidth  Dùng Để THiết lập độ rộng của đường viền
// thuộc tính strokeRect Dùng để thiết lập 1 khung hình không có màu nền

// ct.strokeStyle = 'red'; 
// ct.lineWidth = 5;
// ct.fillRect(100,20,50,100);
// ct.strokeRect(100,20,50,100)


// Cách để vẽ 1 đường thẳng
// moveTo(x,y); Xác Định điểm bắt đầu
// lineTO(x,y); Xác định điểm kết thúc
// sau đó dùng hàm Stroke để kẻ đường thẳng


// ct.moveTo(20,20)
// ct.lineTo(100,100)
// ct.stroke();

// Cách vẽ Đường TRÒN 
// Dùng hàm arc(x,y,r,strat,stop)
// trong đó Strat = 0 và stop = 2*Math.PI

// ct.arc(200,200,30,0,2*Math.PI)
// ct.stroke();



//Vẽ đoạn text trong canvas

// Thuộc tính font dùng để xác định kiểu chữ
// Thuộc tính fillText(text,x,y) dùng để viết text


// ct.font = "50px Arial";
// ct.fillText('Nguyễn Danh Quân', 20, 50)


//================================================================
//                  SVG
    //SVG là dạng hình ảnh nhúng vào trang web

    // Hình ảnh SVG có thể được trình duyệt hiển thị bằng cách đưa chúng vào thẻ img
    //HTML cho phép nhúng SVG trực bởi sử dụng thẻ <svg> </svg> có cú pháp đơn giản 

// SVG có một số yếu tố hình dạng được xác định cụ thể bởi nhà phát triển thông qua các phần tử


    // <circle> </circle> Thẻ vẽ hình tròn
    // <rect> Thẻ vẽ Hình chữ nhật
    // <ellipse></ellipse> Thẻ vẽ hình Elip 
    // <line></line> Thẻ xác định đường kẻ
    // <polyline></polyline> Thẻ xác định chuỗi đa giác

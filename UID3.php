<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="UID3.js">
  <title>sign</title>
<style>
  
 *{
    margin: 0;
     padding: 0;
     box-sizing: border-box;
     font-family: 'Courier New', Courier, monospace;
   }

        body{
            background-image: url(https://images.alphacoders.com/113/1138740.png);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            align-items: center;
            min-height: 100vh;
            /* background-color: #162938; */
        }

        header {
            display: block;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 10px;
            box-shadow: 1px 1px 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #030642;
        }


        .logo{

            font-size: 2em;
            color: #fff;
            user-select: none;
            margin-left: 67px;
            border-radius: 50%;

        }

        .navig1 a {
            position: relative;
            font-family: 10px;
            color: #fff;
            font-weight: 500;
            margin-left: 30px;
        }

        .navig1 .button-login{
            width: 100px;
            height: 40px;
            background: transparent;
            border: 2px solid #fff;
            outline: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
            color: #fff;
            font-family: 500;
            margin-left: 20.533px;
            transition: 0.5s;
        }

        .navig1 .button-login:hover {
            background-color: #fff;
            color: #162938;
        }

        .navig1 a::after{
            content: '';
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 100%;
            height: 3px;
            background: #fff;
            border-radius: 5px;
            transform-origin: left;
            transform: scaleX(0);
            transition: transform 0.5s;
        }

        .navig1 a:hover::after{
            transform: scaleX(1);
        }

        .logo.h1 {
            text-align: center;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            padding: 10px 10px;
            border: 2px solid #162938;
            padding: 19px 10px;
            display: block;
        }

        form {
            display: block;
            align-items: center;
            margin-left: auto;
            margin-right: auto;
            width: 500px;
            height: 500px;
            text-align: center;
            height: auto;
            backdrop-filter: blur(20px);
            box-shadow: 0 0 10px;
            border-radius: 10px;
            padding: 19px 10px;
        }

        label, input {
            padding: 4px;
            border-radius: 4px;
            display: block;
            margin: 0 auto;
            text-align: left;
            width: 50%;
            box-sizing: border-box;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            height: auto;
            color: white;
        }

        input[type="text"], input[type="submit"] {
            width: 50%;
            margin-top: 10px;
            text-align: center;
            border-radius: 5px;
        }

        .sine{
            text-align: center;
            align-items: center;
        }

        /* จัดตำแหน่งให้อยู่ตรงกลาง */
        .centered-nav {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        /* การตั้งค่ากล่องของเมนู */
        .navig {
            display: flex;
            gap: 10px; /* ระยะห่างระหว่างปุ่ม */
            padding: 10px;
            background-color:rgb(95, 97, 99); /* สีพื้นหลังของเมนู */
            border-radius: 10px; /* มุมโค้ง */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* เงาเบาๆ */
            color: #ddd ;
        }

        /* การตั้งค่าปุ่มลิงก์ */
        .nav-item {
            display: inline-block;
            padding: 10px 20px; /* ขนาดกรอบ */
            background-color: #28a745; /* สีเขียว */
            color: white; /* สีตัวหนังสือ */
            text-decoration: none; /* เอาขีดเส้นใต้ของลิงก์ออก */
            border-radius: 5px; /* มุมโค้ง */
            text-align: center;
            font-weight: bold; /* ตัวหนา */
            transition: background-color 0.3s ease; /* เอฟเฟกต์เมื่อชี้เมาส์ */
        }

        /* การตั้งค่าการเปลี่ยนสีเมื่อชี้เมาส์ */
        .nav-item:hover {
            background-color:rgb(162, 172, 163); /* เขียวเข้มขึ้น */
        }

        /* การตั้งค่าปุ่ม */
        .button-login {
            padding: 10px 20px;
            background-color: #007bff; /* สีน้ำเงิน */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease; /* เอฟเฟกต์เมื่อชี้เมาส์ */
        }

        /* การเปลี่ยนสีปุ่มเมื่อชี้เมาส์ */
        .button-login:hover {
            background-color:rgb(0, 0, 0); /* น้ำเงินเข้มขึ้น */
        }


        /* Button styling */
        .button-login {
            padding: 10px 20px;
            background-color: #2196f3; /* Blue background */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease; /* Hover effect */
        }

        /* Hover effect for button */
        .button-login:hover {
            background-color: #1e88e5; /* Slightly darker blue */
        }


        .backgorud1{
            text-align: center;
        }

        .image-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            max-width: 100%; /* จำกัดความกว้างไม่เกินขนาดหน้าจอ */
        }

        .image-container img {
            max-width: 100%; /* ทำให้รูปปรับขนาดตาม container */
            height: auto;    /* รักษาอัตราส่วนของภาพ */
        }

        .image-container .text {
            margin-top: 10px;
            font-size: 18px;
        }

        .Cory{
            display: inline-block; /* ทำให้ขนาดของ div พอดีกับข้อความ */
            border: 2px solid black; /* เพิ่มเส้นขอบสีดำ */
            padding: 10px; /* เพิ่มช่องว่างภายในระหว่างข้อความกับขอบ */
            border-radius: 5px; /* มุมขอบโค้ง */
            font-size: 18px; /* ปรับขนาดตัวอักษร */
            background-color: #f9f9f9; /* สีพื้นหลังของ div */
            border: #fff solid 2px;
            margin-left: 100px;
            font-size: 30px;
            font-weight: bold;
            color: transparent;
            background: url('https://images7.alphacoders.com/128/thumb-1920-1285539.jpg') no-repeat center;
            background-size: cover;
            -webkit-background-clip: text;
            background-clip: text;
        }

        .cory1{
            display: inline-block; /* ทำให้ขนาดของ div พอดีกับข้อความ */
            border: 2px solid black; /* เพิ่มเส้นขอบสีดำ */
            padding: 10px; /* เพิ่มช่องว่างภายในระหว่างข้อความกับขอบ */
            border-radius: 5px; /* มุมขอบโค้ง */
            font-size: 18px; /* ปรับขนาดตัวอักษร */
            background-color: black; /* สีพื้นหลังของ div */
            margin-top: 20px;
            margin-right: 85px;
            margin-left: 65px;
            font-size: 15px;
        }

        .Cory1{
            display: inline-block; /* ทำให้ขนาดของ div พอดีกับข้อความ */
            border: 2px solid black; /* เพิ่มเส้นขอบสีดำ */
            padding: 10px; /* เพิ่มช่องว่างภายในระหว่างข้อความกับขอบ */
            border-radius: 5px; /* มุมขอบโค้ง */
            font-size: 18px; /* ปรับขนาดตัวอักษร */
            background-color: #f9f9f9; /* สีพื้นหลังของ div */
            border: #fff solid 2px;
            margin-left: 700px;
            font-size: 30px;
            font-weight: bold;
            color: transparent;
            background: url('https://images7.alphacoders.com/128/thumb-1920-1285539.jpg') no-repeat center;
            background-size: cover;
            -webkit-background-clip: text;
            background-clip: text;
        }

        .cory2{
            display: inline-block; /* ทำให้ขนาดของ div พอดีกับข้อความ */
            border: 2px solid black; /* เพิ่มเส้นขอบสีดำ */
            padding: 10px; /* เพิ่มช่องว่างภายในระหว่างข้อความกับขอบ */
            border-radius: 5px; /* มุมขอบโค้ง */
            font-size: 18px; /* ปรับขนาดตัวอักษร */
            background-color: black; /* สีพื้นหลังของ div */
            margin-top: 20px;
            margin-right: 85px;
            margin-left: 65px;
            font-size: 15px;
        }

        .T{
            font-family: monospace;
        }

        .Cory3{
            display: inline-block; /* ทำให้ขนาดของ div พอดีกับข้อความ */
            border: 2px solid black; /* เพิ่มเส้นขอบสีดำ */
            padding: 10px; /* เพิ่มช่องว่างภายในระหว่างข้อความกับขอบ */
            border-radius: 5px; /* มุมขอบโค้ง */
            font-size: 18px; /* ปรับขนาดตัวอักษร */
            background-color: #f9f9f9; /* สีพื้นหลังของ div */
            border: #fff solid 2px;
            margin: auto;
            margin-left: 450px;
            margin-top: 20px;
            font-size: 30px;
            font-weight: bold;
            color: transparent;
            background: url('https://picfiles.alphacoders.com/249/thumb-1920-249254.jpg') no-repeat center;
            background-size: cover;
            -webkit-background-clip: text;
            background-clip: text;
        }

        .Cory31{
            display: inline-block; /* ทำให้ขนาดของ div พอดีกับข้อความ */
            border: 2px solid black; /* เพิ่มเส้นขอบสีดำ */
            padding: 10px; /* เพิ่มช่องว่างภายในระหว่างข้อความกับขอบ */
            border-radius: 5px; /* มุมขอบโค้ง */
            font-size: 18px; /* ปรับขนาดตัวอักษร */
            background-color: #f9f9f9; /* สีพื้นหลังของ div */
            border: #fff solid 2px;
            font-size: 30px;
            font-weight: bold;
            color: transparent;
            background: url('https://images7.alphacoders.com/128/thumb-1920-1285539.jpg') no-repeat center;
            background-size: cover;
            -webkit-background-clip: text;
            background-clip: text;
        }

        .cory32{
            display: inline-block; /* ทำให้ขนาดของ div พอดีกับข้อความ */
            border: 2px solid black; /* เพิ่มเส้นขอบสีดำ */
            padding: 10px; /* เพิ่มช่องว่างภายในระหว่างข้อความกับขอบ */
            border-radius: 5px; /* มุมขอบโค้ง */
            font-size: 18px; /* ปรับขนาดตัวอักษร */
            background-color: black; /* สีพื้นหลังของ div */
            margin-top: 15px;
            margin-right: 85px;
            margin-left: 65px;
            font-size: 15px;
        }

        /* css ของตาราง */

        .table-container {
            margin: 20px auto;
            width: 80%;
            text-align: center;
        }

        table {
            margin-left: 100px;
            width: auto;
            border-collapse: collapse;
            margin-top: 20px;
        }

        thead tr {
            margin-left: 100px auto;
            background-color: #333;
            color: #fff;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #ddd;
        }


        .scrollable-box {
            scroll-behavior: smooth;
            overflow-y: auto;
            width: 700px;
            height: 100px;
            margin-top: 15px;
            margin-left: 200px;
            border: 2px solid #ddd;
            border-radius: 10px;
            padding: 10px;
            background-color: #000;
            transform-origin: center; /* ตั้งค่าจุดการขยาย */
        }

        .scrollable-box.zoom {
            transform: scale(1.2); /* เพิ่ม scale เป็น 120% */
        }

        .scrollable-box::-webkit-scrollbar {
            width: 10px;
        }

        .scrollable-box::-webkit-scrollbar-thumb {
            background: #4CAF50;
            border-radius: 5px;
        }

        .scrollable-box::-webkit-scrollbar-thumb:hover {
            background: #45a049;
        }


    </style>
</head>

<body>

    <header>
        <div class="logo">
            <img src="https://lh3.googleusercontent.com/proxy/jAahwgCkmJOblIGzMUVfWKWd9q7fpmSN32CMoL2lgrRFvwpVaYvq4NZGsg9tVbTkEtk0mRvzT8L4rHyCiCpWiyMaDWrkJPf4kdPOKLTovobysMnJ9lVc7g" alt="50" height="50">
        </div>
        <nav class="navig1">
            <a href="UID2.php">login</a>
            <a href="home.php">Home</a>
            <a href="UID1.php">Delete data</a>
            <button class="button-login" onclick="location.href='UID2.php';">LOGIN</button>
        </nav>
    </header>

    <br><div class="sine"><h1 class="h1sign"style="color: #d9e5f3;">WELCOME TO</h1></div><br>
    <div class="sine"><h1 class="h1sign"style="color: #d9e5f3;">WED ME</h1></div> 

    <!-- Adjusted nav section -->
    <div class="centered-nav">
        <nav class="navig">
            <a href="UID2.php">ชื่อเพื่อนๆในห้อง</a>
            <a href="">ยังไม่ได้ทำ</a>
            <a href="">ยังไม่ได้ทำ</a>
            <button class="button-login" onclick="location.href='';">click</button>
        </nav>
    </div><br>

    <!-- รูปภาพ cory ที่หนึ่ง -->
    <br><div class="image-container">
        <img src="https://images5.alphacoders.com/135/thumb-1920-1351993.jpeg" alt="100" width="1000">
        <div class="T">ภาพคน ในห้อง (รูปยังไม่มี ;] )</div>
    </div><br>

    <br><div class="Cory" >
        <p>ประวัติศาสตร์ ของสาขาสารสนเทศ</p>
    </div>
          
        <div class="cory1" style=" color: #ea1c71 ">
        เทคโนโลยีสารสนเทศ หรือ ไอที (อังกฤษ: information technology: IT) คือการประยุกต์ใช้คอมพิวเตอร์และอุปกรณ์โทรคมนาคม เพื่อจัดเก็บ ค้นหา ส่งผ่าน และจัดดำเนินการ <a href="https://th.wikipedia.org/wiki/%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B8%A1%E0%B8%B9%E0%B8%A5" style="color:black">ข้อมูล</a> [1] ซึ่งมักเกี่ยวข้องกับธุรกิจหนึ่งหรือองค์การอื่น ๆ [2] ศัพท์นี้โดยปกติก็ใช้แทนความหมายของเครื่องคอมพิวเตอร์และเครือข่ายคอมพิวเตอร์ และยังรวมไปถึงเทคโนโลยีการกระจายสารสนเทศอย่างอื่นด้วย เช่น โทรทัศน์และโทรศัพท์ อุตสาหกรรมหลายอย่างเกี่ยวข้องกับเทคโนโลยีสารสนเทศ ตัวอย่างเช่น ฮาร์ดแวร์ ซอฟต์แวร์ อิเล็กทรอนิกส์ อุปกรณ์กึ่งตัวนำ อินเทอร์เน็ต อุปกรณ์โทรคมนาคม การพาณิชย์อิเล็กทรอนิกส์ และบริการทางคอมพิวเตอร์
        </div><br>

    <br><div class="Cory1" >
        <p>ความรู้ฟื้นฐานก่อนเรียน สารสนเทศ</p>
    </div>

    <div class="cory2" style=" color:#fff ">
        <P>การเตรียมความรู้พื้นฐานสำหรับการเรียนใน สาขาสารสนเทศ จะช่วยให้คุณมีความพร้อมและสามารถเข้าใจเนื้อหาในเชิงลึกได้ดีขึ้น โดยสาขานี้เกี่ยวข้องกับการจัดการ การวิเคราะห์ และการประมวลผลข้อมูลผ่านเทคโนโลยีสารสนเทศ</p>
    </div><br>

    <div class="Cory3">
        <p>ข้อดีและข้อเสียของ สาขา สารสนเทศ</p>
    </div>        
            <!-- ตารางข้อมูลที่เพิ่มไว้ด้านล่าง -->
            <div class="table-container">

    <table>
        <thead>
            <tr>
                <th>ข้อดี</th>
                <th>ข้อเสีย</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>โอกาสในการทำงานสูง</td>
                <td>การเปลี่ยนแปลงอย่างรวดเร็ว</td>
            </tr>
            <tr>
                <td>รายได้สูง</td>
                <td>ความเครียดในการทำงาน</td>
            </tr>
            <tr>
                <td>ความก้าวหน้าในอาชีพ</td>
                <td>การแข่งขันสูง</td>
            </tr>
            <tr>
                <td>การพัฒนาทักษะที่หลากหลาย</td>
                <td>ชั่วโมงการทำงานยาวนาน</td>
            </tr>
            <tr>
                <td>ความหลากหลายของงาน</td>
                <td>ความเสี่ยงด้านความปลอดภัยข้อมูล</td>
            </tr>
            <tr>
                <td>งานยืดหยุ่น</td>
                <td>ทักษะที่ซับซ้อน</td>
            </tr>
        </tbody>
    </table>
    
</div>

<br><div class="Cory31" >
        <p>สาขาเทคโนโลยีสารสนเทศ เรียนแล้วได้อะไรบ้าง</p>
    </div>

    <div class="cory32" style=" color:#fff ">
        <P>การเรียนในสาขาเทคโนโลยีสารสนเทศ (Information Technology - IT) ช่วยให้ผู้เรียนพัฒนาความรู้ ทักษะ และความเข้าใจในหลายด้านที่สามารถนำไปใช้ได้ในชีวิตจริงและอาชีพการงาน รวมถึงการสร้างนวัตกรรมใหม่ๆ ในยุคดิจิทัล ตัวอย่างของสิ่งที่ได้เรียนรู้และพัฒนา</p>
    </div><br>


<div class="scrollable-box" style=" color:#f2f2f2 ">

    <h1>1.ความรู้พื้นฐานด้านเทคโนโลยี</h1>
        <p>
            การเข้าใจโครงสร้างและการทำงานของคอมพิวเตอร์ (Hardware/Software) <br>
            การเขียนโปรแกรมและพัฒนาซอฟต์แวร์ (Programming & Software Development) <br>
            ระบบปฏิบัติการ (Operating Systems) <br>
            ระบบเครือข่าย (Networking)
        </p>

        <h1>2.การจัดการข้อมูลและฐานข้อมูล</h1>
        <p>
            การออกแบบและจัดการฐานข้อมูล (Database Design & Management) <br>
            การวิเคราะห์ข้อมูล (Data Analysis) <br>
            ความปลอดภัยของข้อมูล (Data Security & Privacy) 
        </p>

        <h1>3.ทักษะการพัฒนาและประยุกต์ใช้เทคโนโลยี</h1>
        <p>
        การพัฒนาแอปพลิเคชัน (Web/Mobile Development) <br>
        การสร้างและจัดการระบบคลาวด์ (Cloud Computing) <br>
        ปัญญาประดิษฐ์ (Artificial Intelligence - AI) <br>
        อินเทอร์เน็ตในทุกสิ่ง (Internet of Things - IoT)
        </p>

        <h1>4.การจัดการระบบสารสนเทศ</h1>
        <p>
        การออกแบบระบบสารสนเทศสำหรับองค์กร (Information Systems Design) <br>
        การวิเคราะห์และแก้ไขปัญหาทางธุรกิจด้วย IT (Business IT Solutions) <br>
        การจัดการโครงสร้างพื้นฐานด้าน IT
        </p>

        <p> (ข้อมูลแบบ ขาว) </p>
</div>

<br><div class="Cory31" >
        <p>สาขาเทคโนโลยีสารสนเทศ เรียนแล้วได้อะไรบ้าง</p>
    </div>

    <div class="cory32" style=" color:#fff ">
        <P>การเรียนในสาขาเทคโนโลยีสารสนเทศ (Information Technology - IT) ช่วยให้ผู้เรียนพัฒนาความรู้ ทักษะ และความเข้าใจในหลายด้านที่สามารถนำไปใช้ได้ในชีวิตจริงและอาชีพการงาน รวมถึงการสร้างนวัตกรรมใหม่ๆ ในยุคดิจิทัล ตัวอย่างของสิ่งที่ได้เรียนรู้และพัฒนา</p>
    </div><br>

</body>
</html>
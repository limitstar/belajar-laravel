<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typography Library</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap');
        
        body {
            background-color: #f5f1e9;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23d5b88f' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
            font-family: 'Libre Baskerville', Georgia, serif;
            color: #463f3a;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        .library-container {
            width: 85%;
            max-width: 900px;
            background: #fff;
            padding: 50px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            position: relative;
            overflow: hidden;
        }
        
        .library-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 10px;
            background: linear-gradient(90deg, #8B4513, #A0522D, #CD853F, #DEB887);
        }
        
        .typography-section {
            margin-bottom: 40px;
            padding: 25px;
            position: relative;
            border-left: 4px solid;
            transition: all 0.3s ease;
        }
        
        .typography-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: -4px;
            width: 4px;
            height: 100%;
            background: inherit;
            opacity: 0.2;
        }
        
        .typography-section:hover {
            transform: translateX(5px);
        }
        
        .bold-section {
            border-color: #8B4513;
            background-color: rgba(139, 69, 19, 0.05);
        }
        
        .underline-section {
            border-color: #1A5276;
            background-color: rgba(26, 82, 118, 0.05);
        }
        
        .italic-section {
            border-color: #7D3C98;
            background-color: rgba(125, 60, 152, 0.05);
        }
        
        .section-title {
            font-family: 'Playfair Display', serif;
            margin-top: 0;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }
        
        .bold-section .section-title {
            color: #8B4513;
        }
        
        .underline-section .section-title {
            color: #1A5276;
        }
        
        .italic-section .section-title {
            color: #7D3C98;
        }
        
        .section-title::after {
            content: "";
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 1px;
            background-color: currentColor;
            opacity: 0.5;
        }
        
        .content {
            line-height: 1.8;
            font-size: 16px;
        }
        
        .bold-text {
            font-weight: 700;
            color: #5D4037;
        }
        
        .underlined-text {
            text-decoration: underline;
            text-decoration-color: rgba(26, 82, 118, 0.5);
            text-decoration-thickness: 1px;
            text-underline-offset: 3px;
            color: #1A5276;
        }
        
        .italic-text {
            font-style: italic;
            color: #5B2C6F;
        }
        
        .section-icon {
            position: absolute;
            right: 20px;
            top: 20px;
            font-size: 24px;
            opacity: 0.2;
            transition: all 0.3s ease;
        }
        
        .typography-section:hover .section-icon {
            opacity: 0.6;
            transform: scale(1.2);
        }
        
        .bold-section .section-icon {
            color: #8B4513;
        }
        
        .underline-section .section-icon {
            color: #1A5276;
        }
        
        .italic-section .section-icon {
            color: #7D3C98;
        }
        
        @media (max-width: 768px) {
            .library-container {
                width: 90%;
                padding: 30px 20px;
            }
            
            .typography-section {
                padding: 20px 15px;
            }
        }
    </style>
</head>
<body>
    <div class="library-container">
        <div class="typography-section bold-section">
            <i class="fas fa-bold section-icon"></i>
            <h2 class="section-title">Mengenal Huruf Tebal</h2>
            <div class="content bold-text">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla est fugit porro possimus at iusto dolores debitis laborum rerum, cum optio ipsam! Nesciunt doloremque tempore quibusdam fugit velit animi suscipit.
            </div>
        </div>
        
        <div class="typography-section underline-section">
            <i class="fas fa-underline section-icon"></i>
            <h2 class="section-title">Mengenal Huruf Garis Bawah</h2>
            <div class="content underlined-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum nobis nemo delectus maxime minima reiciendis perferendis illo soluta veritatis aspernatur odit veniam in dicta alias, tempore molestiae. Iure, iste voluptatum?
            </div>
        </div>
        
        <div class="typography-section italic-section">
            <i class="fas fa-italic section-icon"></i>
            <h2 class="section-title">Mengenal Huruf Miring</h2>
            <div class="content italic-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus totam assumenda porro iusto? Delectus laborum dicta tempora sunt accusamus dolores vel distinctio. Qui, sunt quae amet ducimus iusto tempora? Ipsa.
            </div>
        </div>
    </div>
</body>
</html>

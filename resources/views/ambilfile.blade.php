<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memanggil File dari Views</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            min-height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
        
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .container {
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
            width: 80%;
            max-width: 800px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        h1, h2, h3, h4, h5, h6 {
            margin: 25px 0;
            position: relative;
            overflow: hidden;
            padding: 15px;
            border-radius: 10px;
            transition: all 0.5s cubic-bezier(0.68, -0.55, 0.27, 1.55);
            transform-origin: left;
        }
        
        h1 {
            background: linear-gradient(90deg, #ff00cc, #3333ff);
            font-size: 2.5em;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
            padding-left: 65px;
            clip-path: polygon(0 0, 100% 0, 95% 100%, 5% 100%);
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5);
        }
        
        h1::before {
            content: "01";
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.5em;
            opacity: 0.7;
            font-weight: 900;
        }
        
        h2 {
            background: linear-gradient(90deg, #FC466B, #3F5EFB);
            font-size: 2em;
            padding-left: 65px;
            clip-path: polygon(0 0, 100% 0, 97% 100%, 3% 100%);
        }
        
        h2::before {
            content: "02";
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.3em;
            opacity: 0.7;
            font-weight: 900;
        }
        
        h3 {
            background: linear-gradient(90deg, #8E2DE2, #4A00E0);
            font-size: 1.7em;
            padding-left: 65px;
        }
        
        h3::before {
            content: "03";
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.2em;
            opacity: 0.7;
            font-weight: 900;
        }
        
        h4 {
            background: linear-gradient(90deg, #00F260, #0575E6);
            font-size: 1.4em;
            padding-left: 65px;
        }
        
        h4::before {
            content: "04";
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.1em;
            opacity: 0.7;
            font-weight: 900;
        }
        
        h5 {
            background: linear-gradient(90deg, #f857a6, #ff5858);
            font-size: 1.2em;
            padding-left: 65px;
        }
        
        h5::before {
            content: "05";
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1em;
            opacity: 0.7;
            font-weight: 900;
        }
        
        h6 {
            background: linear-gradient(90deg, #11998e, #38ef7d);
            font-size: 1em;
            padding-left: 65px;
        }
        
        h6::before {
            content: "06";
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 0.9em;
            opacity: 0.7;
            font-weight: 900;
        }
        
        h1:hover, h2:hover, h3:hover, h4:hover, h5:hover, h6:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
            cursor: pointer;
        }
        
        h1::after, h2::after, h3::after, h4::after, h5::after, h6::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: rgba(255, 255, 255, 0.3);
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.5s ease;
        }
        
        h1:hover::after, h2:hover::after, h3:hover::after, h4:hover::after, h5:hover::after, h6:hover::after {
            transform: scaleX(1);
            transform-origin: left;
        }
        
        @media (max-width: 768px) {
            .container {
                width: 95%;
                padding: 20px;
            }
            
            h1, h2, h3, h4, h5, h6 {
                padding-left: 50px;
            }
            
            h1::before, h2::before, h3::before, h4::before, h5::before, h6::before {
                left: 10px;
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Memanggil File dari Views Tag heading 1</h1>
        <h2>Memanggil File dari Views Tag heading 2</h2>
        <h3>Memanggil File dari Views Tag heading 3</h3>
        <h4>Memanggil File dari Views Tag heading 4</h4>
        <h5>Memanggil File dari Views Tag heading 5</h5>
        <h6>Memanggil File dari Views Tag heading 6</h6>
    </div>
    
    <script>
        document.querySelectorAll('h1, h2, h3, h4, h5, h6').forEach(heading => {
            heading.addEventListener('click', () => {
                heading.style.animation = 'pulse 0.5s';
                setTimeout(() => {
                    heading.style.animation = '';
                }, 500);
            });
        });
    </script>
</body>
</html>

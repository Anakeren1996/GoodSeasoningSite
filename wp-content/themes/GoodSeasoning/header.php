<head>
    <title>Ana Desenvolvedora</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Ana Lima">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/styles.css' ?>">
</head>
<header>
    <a href="#" class="logo">Food<span>.</span></a>
    <div class="menuToggle" onclick="menuToggle();"></div>
    <ul class="navigation">
        <li><a href="#banner" onclick="menuToggle();">Home</a></li>
        <li><a href="#about" onclick="menuToggle();">About</a></li>
        <li><a href="#menu" onclick="menuToggle();">Menu</a></li>
        <li><a href="#expert" onclick="menuToggle();">Expert</a></li>
        <li><a href="#testimonials" onclick="menuToggle();">Testimonials</a></li>
        <li><a href="#contact" onclick="menuToggle();">Contact</a></li>
    </ul>
</header>

<body>
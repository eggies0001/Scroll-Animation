<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reveal</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://unpkg.com/scrollreveal"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="scroller">
        <section class="sec-0">
            <h1 class="headerTitle">Sample Animation</h1>
            <div class="cardText-0">
            <img  class="img-0"src="..\ScrollAnimation\assets\background.jpg" alt="">
                <h1 class="h1-title-0">Sample Text</h1>
                <p class="h5-p-0"> 
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                     but also the leap into electronic typesetting, remaining essentially unchanged. 
                     It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </section>
    <div class="scroller">
        <section class="sec-1">
            <div class="cardText-1">
            <img  class="img-1"src="..\ScrollAnimation\assets\background.jpg" alt="">
                <h1 class="h1-title-1">Sample Text</h1>
                <p class="h5-p-1"> 
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                     but also the leap into electronic typesetting, remaining essentially unchanged. 
                     It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </section>
    <div class="scroller">
        <section class="sec-2">
            <div class="cardText">
            <img  class="img-2"src="..\ScrollAnimation\assets\background.jpg" alt="">
                <h1 class="h1-title-2">Sample Text</h1>
                <p class="h5-p-2"> 
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                     but also the leap into electronic typesetting, remaining essentially unchanged. 
                     It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </section>
    <div class="scroller">
        <section class="sec-3">
            <div class="cardText">
                <h1 class="h1-title-3">Sample Text</h1>
                <img  class="img-3" src="..\ScrollAnimation\assets\background.jpg" alt="">
                <p class="h5-p-3"> 
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                     but also the leap into electronic typesetting, remaining essentially unchanged. 
                     It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </section>
    </div>
</body>
<script>
    ScrollReveal({ reset: true,
        distance: '60px',
        duration: 2500,
        delay: 400
    });
ScrollReveal().reveal('.h1-title-0', {delay:800, origin: 'bottom', distance: '20px'});
ScrollReveal().reveal('.h5-p-0', {delay:500, origin: 'left'});
ScrollReveal().reveal('.img-0', {delay: 100, origin: 'bottom' });
ScrollReveal().reveal('.headerTitle', {delay: 0, origin: 'bottom' });
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Apple Monocle</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css"  href="assets/css/main.css">
    </head>
    <body>
        <header class="header">
            <h1>Apple Monocle</h1>
        </header>
        <main class="main">
            <div class="content">
                <section class="image-customizer">
                    <div><img src="assets/img/base.jpg" id="imageSrc"></div>
                    <div>
                        Text: <input type="text" id="imageText" value="#nsfw plz">
                        <br>
                        Text Color:
                        <select id="imageColor">
                            <option value="white">White</option>
                            <option value="black">Black</option>
                            <option value="red">Red</option>
                            <option value="green">Green</option>
                            <option value="blue">Blue</option>
                            <option value="teal">Teal</option>
                            <option value="yellow">Yellow</option>
                            <option value="magenta">Magenta</option>
                            <option value="orange">Orange</option>
                            <option value="pink">Pink</option>
                        </select>
                        <br>
                        Blur background:
                        <input type="checkbox" id="imageBlur"/>
                        <br>
                        Random background:
                        <input type="checkbox" id="imageRandom"/>
                        <br>
                        Capitalize text:
                        <input type="checkbox" id="capitalizeText"/>
                        <br>
                        <br>
                        <textarea type="text" readonly id="imageSrcVal"placeholder="Please use the options above"></textarea>
                    </div>
                </section>
                <hr>
                <section class="instructions">
                    <p>Visit <span class="code"><a href="https://66ankk.github.io/applemonocle.github.io/text">https://66ankk.github.io/applemonocle.github.io/{text}</a></span> to view your very own Apple Monocle Meme.</p>
                    <p>Additionally, you can replace spaces with <span class="code">+</span> or <span class="code">_</span> in order to make the URLs compatible with certain forums software or you can append <span class="code">.jpg</span> to the end of the URL.</p>
                    <ul>
                        <li>Add <span class="code">&amp;color=red, black, blue, green or white</span> to change the text color.</li>
                        <li>Add <span class="code">&amp;blur</span> to blur the background.</li>
                        <li>Add <span class="code">&amp;random</span> to choose a random background image.</li>
                    </ul>
                </section>
                <hr>
                <section class="credits">
                    <p>Created by <b>Mister_Fix</b> & <b>LeonFagan71</b></p>
                    <p>Images served so far: <b>2,459</b></p>
                </section>
            </div>
        </main>
        <script type="text/javascript">
            function updateImage(){
                var imageText=document.getElementById("imageText").value.split(' ').join('_');
                var imageColor=document.getElementById("imageColor").value;
                var imageBlur=document.getElementById("imageBlur").checked;
                var imageRandom=document.getElementById("imageRandom").checked;
                var capitalizeText=document.getElementById("capitalizeText").checked;
                var url="https://66ankk.github.io/applemonocle.github.io/";
                url+=imageText;
                if (imageColor!="white")url+="&color="+imageColor;
                if (imageBlur) url+="&blur";
                if (imageRandom) url+="&random";
                if (capitalizeText) url+="&capitalize"; 
                console.log(url);
                var imgSrc=document.getElementById("imageSrc");
                var imgSrcVal=document.getElementById("imageSrcVal");
                imgSrcVal.value=url;
                chageIcon(imgSrc, url);
            }
            function chageIcon(domImg,srcImage){
                var img = new Image();
                img.onload = function(){
                    // Load completed
                    domImg.src = this.src;
                };
                img.src = srcImage;
            }
            document.getElementById("imageText").addEventListener('change', updateImage);
            document.getElementById("imageColor").addEventListener('change', updateImage);
            document.getElementById("imageBlur").addEventListener('change', updateImage);
            document.getElementById("imageRandom").addEventListener('change', updateImage);
            document.getElementById("capitalizeText").addEventListener('change', updateImage);
        </script>
    </body>
</html>

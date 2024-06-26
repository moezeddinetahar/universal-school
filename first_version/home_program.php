<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U-S</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<style>
/* Importing Google font - Open Sans */
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}



.card-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    max-width: 1250px;
    margin: 150px auto;
    padding: 20px;
    gap: 20px;
}

.card-list .card-item {
    background: #fff;
    padding: 26px;
    border-radius: 8px;
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.04);
    list-style: none;
    cursor: pointer;
    text-decoration: none;
    border: 2px solid transparent;
    transition: transform 0.2s ease-in-out; /* Ajoute une transition à la transformation */
}

.card-list .card-item:hover {
    transform: scale(1.05); /* Échelle légèrement augmentée lors du survol */
}

.card-list .card-item img {
    width: 100%;
    aspect-ratio: 16/9;
    border-radius: 8px;
    object-fit: cover;
}

.card-list span {
    display: inline-block;

    margin-top: 32px;
    padding: 8px 15px;
    font-size: 0.75rem;
    border-radius: 50px;
    font-weight: 600;
}

.card-list .developer {
    background-color: #F7DFF5; 
    color: #B22485;
}   

.card-list .designer {
    background-color: #d1e8ff;
    color: #2968a8;
}

.card-list .editor {
    background-color: #d6f8d6; 
    color: #205c20;
}

.card-item h3 {
    color: #000;
    font-size: 1.438rem;
    margin-top: 28px;
    font-weight: 600;
}

.card-item .arrow {
    display: flex;
    align-items: center;
    justify-content: center;
    transform: rotate(-35deg);
    height: 40px;
    width: 40px;
    color: #000;
    border: 1px solid #000;
    border-radius: 50%;
    margin-top: 40px;
    transition: 0.2s ease;
}

.card-list .card-item:hover .arrow  {
    background: #000;
    color: #fff; 
}

@media (max-width: 1200px) {
    .card-list .card-item {
        padding: 15px;
    }
}

@media screen and (max-width: 980px) {
    .card-list {
        margin: 0 auto;
    }
}


</style>
<body>
    <div class="card-list">
        <a href="#" class="card-item" >
        	<img src="https://rivezli.b-cdn.net/rivezli-prepa%20thumbnails/python%20rivezli%20THUMB2.png" alt="Card Image"> 
           
            <span class="developer" >Developer</span>
            <h3>A "developer" codes software and websites.</h3>
            <div class="p-0 text-center "><b class="solde ml-2 text-center " style="color: rgb(39, 199, 212);"><span class="developer" style="font-size: 28px; color: rgb(39, 199, 212);">120</span><span class="developer" style="font-weight: 500; font-size: 12px; color: rgb(39, 199, 212);">TND </span></b></div>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="#" class="card-item">
			<img src="https://rivezli.b-cdn.net/thumbnails-ecogestion/TVA.png" alt="Card Image">            
			<span class="designer">Designer</span>
            <h3>A "designer" is a design expert.</h3>
            <div class="p-0 text-center"><b class="solde ml-2 text-center" style="color: rgb(39, 199, 212);"><span class="designer" style="font-size: 28px; color: rgb(39, 199, 212);">89</span><span class="designer" style="font-weight: 500; font-size: 12px; color: rgb(39, 199, 212);">TND </span></b></div>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
        <a href="#" class="card-item">
			  <img src="https://rivezli.b-cdn.net/rivezliprepaaa/Withoutpromos/Withoutpromos/Physique.png" alt="Card Image">
           <span class="editor">Editor</span>
            <h3>An "editor" ensures content quality and accuracy.</h3>
            <div class="p-0 text-center"><b class="solde ml-2 text-center" style="color: rgb(39, 199, 212);"><span class="editor" style="font-size: 28px; color: rgb(39, 199, 212);">45</span><span class="editor" style="font-weight: 500; font-size: 12px; color: rgb(39, 199, 212);">TND </span></b></div>
            <div class="arrow">
                <i class="fas fa-arrow-right card-icon"></i>
            </div>
        </a>
    </div>
</body>
</html>
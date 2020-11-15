<template>
    <div class="m-t-w">
 <div class="container">
  <img src="/images/v.png" alt="Avatar" style="width:90px">
  <p><span>Vue.js</span></p>
  <p>Изучаю этот фреймворк и получаю удовольствие от его простоты.</p>
  <p>Он развивается и предпологаю, что он еще себя проявит.</p>
  <p>Реализует все возможности для создания frontEnd.</p>
  <p>Vue + Laravel считаю лучшей связкой инструментов.</p>
</div>

<div class="container">
  <img src="/images/laravel.png" alt="Laravel" style="width:90px">
  <p><span >Laravel</span></p>
  <p>Я использую этот фреймворк потому что считаю, что он хорошо продуман.</p>
  <p>Уже с коробки предоставляет уйму мощных возможностей.</p>
  <p>Мощное средство для разработки backEnd.</p>
</div> 
    </div>
</template>

<style>
.m-t-w{
       margin-top: 10%;
       width: 900px; 
         margin-left: 15%;

}
 /* Style the container with a rounded border, grey background and some padding and margin */
.container {
    border: 2px solid #ccc;
    background-color: #eee;
    border-radius: 5px;
    padding: 16px;
    margin: 16px 0;
}

/* Clear floats after containers */
.container::after {
    content: "";
    clear: both;
    display: table;
}

/* Float images inside the container to the left. Add a right margin, and style the image as a circle */
.container img {
    float: left;
    margin-right: 20px;
    border-radius: 50%;
}

/* Increase the font-size of a span element */
.container span {
    font-size: 20px;
    margin-right: 15px;
}

/* Add media queries for responsiveness. This will center both the text and the image inside the container */
@media (max-width: 500px) {
  .container {
    text-align: center;
  }

  .container img {
    margin: auto;
    float: none;
    display: block;
  }
} 
</style>


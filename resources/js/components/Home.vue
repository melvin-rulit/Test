<template>
    <div class="m-to">
 <div class="container">
  <img src="/images/v.png" alt="Avatar" style="width:90px">
  <p><span>Vue.js</span></p>
  <p>HTML CSS saved us from a web disaster.</p>
</div>

<div class="container">
  <img src="/images/laravel.png" alt="Laravel" style="width:90px">
  <p><span >Laravel</span></p>
  <p>Я использую этот фреймворк потомучто считаю, что он хорошо продуман.</p>
</div> 
    </div>
</template>

<style scoped>
.m-to{
       margin-top: 10%;
        margin-left: 5%;

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


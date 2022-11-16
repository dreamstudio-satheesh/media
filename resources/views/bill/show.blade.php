@extends('layouts.admin')


@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Bill Status -{{ $bill->status }}</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                    <select class="form-control">                   
                        <option {{ ( $bill->status == 'pending') ? 'selected' : '' }}>pending</option>
                        <option {{ ( $bill->status == 'approved') ? 'selected' : '' }}>approved</option>
                        <option {{ ( $bill->status == 'rejected') ? 'selected' : '' }}>rejected</option>
                    </select>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                 <canvas
          id="canvas"
          width="500"
          height="200"
          style="border: 1px solid black;"
      ></canvas>

                <img src="{{ asset('storage/' . $bill->photo) }}" id="demo" hidden>
                <div style="margin-top:5px">
                    <span>Size: </span>
                    <input
                        type="range"
                        min="1"
                        max="50"
                        value="10"
                        class="size"
                        id="sizeRange"
                    />
                  </div>
                  <div style="margin-top:5px">
                    <span>Color: </span>
                    <input type="radio" name="colorRadio" value="black" checked />
                    <label for="black">Black</label>
                    <input type="radio" name="colorRadio" value="white" />
                    <label for="black">White</label>
                    <input type="radio" name="colorRadio" value="red" />
                    <label for="black">Red</label>
                    <input type="radio" name="colorRadio" value="green" />
                    <label for="black">Green</label>
                    <input type="radio" name="colorRadio" value="blue" />
                    <label for="black">Blue</label>
                  </div>
                  <div style="margin-top:5px">
                    <button id="clear" >Clear</button>
                  </div>
         
            </div>
        
            
        </div>
    </div>
</div>


<script>
    

// enabling drawing on the blank canvas
drawOnImage();

// displaying the  image
const image = document.getElementById("demo");


// enabling the brush after after the image
// has been uploaded
image.addEventListener("load", () => {
    drawOnImage(image);
});





const sizeElement = document.querySelector("#sizeRange");
let size = sizeElement.value;
sizeElement.oninput = (e) => {
size = e.target.value;
};

const colorElement = document.getElementsByName("colorRadio");
let color;
colorElement.forEach((c) => {
if (c.checked) color = c.value;
});

colorElement.forEach((c) => {
c.onclick = () => {
    color = c.value;
};
});

function drawOnImage(image = null) {
const canvasElement = document.getElementById("canvas");
const context = canvasElement.getContext("2d");

// if an image is present,
// the image passed as parameter is drawn in the canvas
if (image) {
    const imageWidth = image.width;
    const imageHeight = image.height;

    // rescaling the canvas element
    canvasElement.width = imageWidth;
    canvasElement.height = imageHeight;

    context.drawImage(image, 0, 0, imageWidth, imageHeight);
    
}

const clearElement = document.getElementById("clear");
clearElement.onclick = () => {
    context.clearRect(0, 0, canvasElement.width, canvasElement.height);
};

let isDrawing;

canvasElement.onmousedown = (e) => {
    isDrawing = true;
    context.beginPath();
    context.lineWidth = size;
    context.strokeStyle = color;
    context.lineJoin = "round";
    context.lineCap = "round";
    context.moveTo(e.clientX, e.clientY);
};

canvasElement.onmousemove = (e) => {
    if (isDrawing) {
        context.lineTo(e.clientX, e.clientY);
        context.stroke();
    }
};

canvasElement.onmouseup = function () {
    isDrawing = false;
    context.closePath();
};
}
</script>
@endsection

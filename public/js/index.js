//Image Configurations

function showImgArea() {
     let imageArea = document.querySelector(".imgArea");
     let label = document.querySelector('#uploadImg');
     let span = document.querySelector('#imgzone-image');
     let icon = document.querySelector('#show');

     imageArea.style.visibility = 'visible';



     label.classList.add('upload-img');
     span.classList.add('imgzone--image');
     icon.innerHTML = '<ion-icon name="chevron-up-sharp" onclick="hideImgArea()"></ion-icon>';
}

function hideImgArea() {
     let imageArea = document.querySelector(".imgArea");
     let label = document.querySelector('#uploadImg');
     let span = document.querySelector('#imgzone-image');
     let icon = document.querySelector('#show');

     imageArea.style.visibility = 'hidden';



     label.classList.remove('upload-img');
     span.classList.remove('imgzone--image');
     icon.innerHTML = '<ion-icon name="chevron-down-sharp" onclick="showImgArea()"></ion-icon>';
}


// Upload img animation
const inpuFile = document.querySelector('#image');
const imgFile = document.querySelector('#imgzone-image');
const imgFileTxt = "+";

imgFile.innerHTML = imgFileTxt;

inpuFile.addEventListener('change', function (e) {
     const inpuTarget = e.target;
     const file = inpuTarget.files[0];

     if (file) {
          const reader = new FileReader();

          reader.addEventListener('load', function (e) {
               const readerTarget = e.target;
               const img = document.createElement('img');

               img.src = readerTarget.result;
               img.classList.add('imgzone--image');
               imgFile.innerHTML = '';

               imgFile.appendChild(img);
          });

          reader.readAsDataURL(file);
     } else {
          imgFile.innerHTML = imgFileTxt;
     }
});
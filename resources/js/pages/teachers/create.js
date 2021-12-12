
// ------------- Select2 --------------

$('.teachers-create .disciplines').select2();


// ------------- Loading and previewing an image --------------

let teacherImgPreviewC = document.querySelector('.teachers-create img.image-preview');

if(teacherImgPreviewC) {

    let borderImgPreviewC = document.querySelector('.teachers-create div.image-preview');
    let inputImgPreviewC = document.querySelector('.teachers-create .upload-file');

    teacherImgPreviewC.style.display = 'none';


    function clickInputTeacher() {

        inputImgPreviewC.click();
    }

    function changeInputTeacher(event) {

        const reader = new FileReader();


        reader.onload = e => {

            borderImgPreviewC.style.display = 'none';
            teacherImgPreviewC.style.display = 'block';

            teacherImgPreviewC.src = e.target.result;
        };


        reader.readAsDataURL(event.target.files[0]);
    }


    teacherImgPreviewC.onclick = clickInputTeacher;
    borderImgPreviewC.onclick = clickInputTeacher;
    inputImgPreviewC.onchange = changeInputTeacher;
}

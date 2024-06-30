var skill_count=1;
var hobby_count=1;
var education_count=1;
var experience_count=1;
function addSkill(){
    let addSkill = document.getElementById('addSkill');
    let skillHide = document.getElementById('skill_hide');
    if(skill_count<3)
    {
        ++skill_count;
        var field = 
          `<div class="mb-3">
                <input type="text" value="Escreva aqui suas habilidades" class="form-control" name="skill1" required>
            </div>`
        console.log(field);
        var htmlObject = document.createElement('div');
        htmlObject.innerHTML=field;
        addSkill.insertAdjacentElement("beforeend", htmlObject);
    }
    if(skill_count==3)
    {
        skillHide.style = "display:none";
    }
}
function addEducation(){
    let addEducation = document.getElementById('addEducation');
    let educationHide = document.getElementById('education_hide');
    if(education_count<2)
    {
        ++education_count;
        var field = 
        ` <div class="ano">
                <div>
                    <label for="exampleInputEmail1" class="form-label"></label>
                    <input type="text" value="2020 a 2024" name="to1" class="form-control">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"></label>
                <input type="text" value="Curso e Instituição" name="grade1" class="form-control">
            </div>
            <div id="addEducation"></div>
            <div class="mb-3">`;
        var htmlObject = document.createElement('div');
        htmlObject.innerHTML=field;
        addEducation.insertAdjacentElement("beforeend", htmlObject);
    }
    if(education_count==2)
    {
        educationHide.style = "display:none";
    }
}
function addExperience(){
    let addExperience = document.getElementById('addExperience');
    let experienceHide = document.getElementById('experience_hide');
    if(experience_count<3)
    {
        ++experience_count;
        var field = 
        `<div class="mb-4">
                <label for="exampleInputEmail1" class="form-label"></label>
                <input type="text" value="Titulo" name="title1" class="form-control">
            </div>
                       <div class="form-floating">
                <textarea class="form-control" name="about_me" style="height: 100px" required></textarea>
            </div>
            <div id="addExperience"></div>`;
        var htmlObject = document.createElement('div');
        htmlObject.innerHTML=field;
        addExperience.insertAdjacentElement("beforeend", htmlObject);
    }
    if(experience_count==3)
    {
        experienceHide.style = "display:none";
    }
}
const inputFile = document.querySelector("#picture__input");
const pictureImage = document.querySelector(".picture__image");
const pictureImageTxt = "Enviar Imagem";
pictureImage.innerHTML = pictureImageTxt;

inputFile.addEventListener("change", function (e) {
  const inputTarget = e.target;
  const file = inputTarget.files[0];

  if (file) {
    const reader = new FileReader();

    reader.addEventListener("load", function (e) {
      const readerTarget = e.target;

      const img = document.createElement("img");
      img.src = readerTarget.result;
      img.classList.add("picture__img");

      pictureImage.innerHTML = "";
      pictureImage.appendChild(img);
    });

    reader.readAsDataURL(file);
  } else {
    pictureImage.innerHTML = pictureImageTxt;
  }
});
function calcularIdade() {
    const inputAnoNascimento = document.getElementById("anoNascimento");
    const anoNascimento = inputAnoNascimento.value;

    const anoAtual = new Date().getFullYear();
    const idade = anoAtual - anoNascimento;

    const resultado = document.getElementById("resultado");
    resultado.innerText = "Idade: " + idade + " anos.";
}
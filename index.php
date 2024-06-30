<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculo Na Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="left_Side">
            <div class="profileText">
                        <label class="picture" for="picture__input" tabIndex="0">
                    <span class="picture__image"></span>
                        </label>
                  <input type="file" name="picture__input" id="picture__input">
                <div class="form-floating2">
                    <textarea class="form-control" name="about_me" required></textarea>
                </div>
                        <form action="formacao">
             <div class="multipart">
                        <input type="text" value="Adicionar Formação" id="formacao"
                        class="input">
                    </div>
                 </form>
            </div>
            <div class="contactinfo">
                <h5 class="title">CONTATO</h5>
                <div class="mb-3">
                    <div class="single-input">
                        <input type="text" value="Adicionar Telefone"id="nome"
                        class="input">
                    </div>
                    
                    <div class="single-input">
                        <input type="text" value="Adicionar E-mail"id="nome"
                        class="input">
                    </div>
                    <div class="single-input">
                        <input type="text" value="Adicionar Endereço"id="nome"
                        class="input">
                    </div>
                </div>
            </div>
            <div class="form-container">
            <div class="contactinfo">
                <h5 class="title">HABILIDADES</h5>
                <div class="mb-3">
                    <input type="text" value="Escreva aqui suas habilidades" class="form-control" name="habilidade" required>
                </div>
                <div id="addSkill"></div>
                <div class="mb-3">
                    <button type="button" id="skill_hide" class="btn btn-primary form-control" onclick="addSkill()">+</button>
                </div>
            </div>
            </div>
            <div class="form-container">
            <div class="contactinfo">
                <h5 class="title">FORMAÇÃO</h5>
            <div class="ano">
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
            <div class="mb-3">
                <button type="button" id="education_hide" class="btn btn-primary form-control" onclick="addEducation()">+</button>
            </div>
            </div>
            </div>
        </div>
        <div class="right_Side">
                <div class="about">
                    <h2 class="title2">SOBRE MIM</h2>
                </div>
                    <div class="form-floating">
                        <textarea class="form-control" name="about_me" style="height: 100px" required></textarea>
                    </div>
                 <label for="anoNascimento"></label>
                 <input type="number" placeholder="Ano de Nascimento" id="anoNascimento" class="print-hide">
                 <button onclick="calcularIdade()" class="btn btn-dark print-hide" >Calcular Idade</button>
                 <p id="resultado"></p>
            <div class="about">
                <br>
                <h2 class="title2">EXPERIÊNCIAS</h2>
            </div>
            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label"></label>
                <input type="text" value="Titulo" name="title1" class="form-control">
            </div>
            <div class="form-floating">
                <textarea class="form-control" name="about_me" style="height: 100px" required></textarea>
            </div>
            <div id="addExperience"></div>
            <div class="mb-4">
                <button type="button" id="experience_hide" class="btn btn-primary form-control" onclick="addExperience()">+</button>
            </div>
        <button class="btn btn-dark print-hide" onclick="window.print()">IMPRIMIR</button>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="java.js"></script>
</html>
<?php 

    if(isset($_POST['submit']))
    {
        print_r($_POST['nome']);
        print_r($_POST['email']);
        print_r($_POST['telefone']);

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formlario | GN</title>
    <style>
        body{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-image: linear-gradient(to right, rgb(187, 62, 58), rgb(100,14,20));
        }
        .box{
            color:pink;
            position: absolute;
            top: 50%;
            right: 29%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid darkred;
        }
        legend{
            border: 1px solid darkred;
            padding: 10px;
            text-align: center;
            background-color: darkred;
            border-radius: 8px;    
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid pink;
            outline: none;
            color:pink;
            font-size: 15px;
            width: 100%;
            letter-spacing: 1px;
        }
        .labelInput{
            position: absolute;
            top:0px;
            left: 2px;
            pointer-events: none;
            transition: .2s;
        }

        /*Essa é a parte voltada para animação dos menus*/
        .inputUser:focus ~ .labelInput, 
        .inputUser:valid ~ .labelInput{
            top:-20px;
            font-size: 12px;
            color: red;
        }
        #data_nasciment{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(110,44,50), rgb(197, 92, 89));
            width: 100%;
            border: none;
            padding: 15px;
            color: rgb(102, 8, 24);
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(100, 43,25), rgb(197,80,69));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method ="POST">
            <fieldset>
                <legend><strong>Formulario de Cliente</strong></legend>
                <br>
                <div class="inputBox"><input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">  Nome Completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                        <label for="emal"class="labelInput">  E-mail</label>
                <div>
                    <br>
                <div class="inputBox"><input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone"class="labelInput">  Telefone</label>
                </div>
                    <br>
                    <p>Sexo:</p>
                    <input type="radio" id="feminino" name="genero" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <br>
                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" id="outro" name="genero" value="outro" required>
                    <label for="outro">Outro</label>
                    <br><br>
                <div class="inputBox">
                    <label for="dada_nascimento"><strong>Data de Nascimento:</strong></label>
                    <input type="date" nome= "data_nascimento" id="data_nascimento" class="data_nascimento" required> 
                </div>
                    <br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                        <label for="cidade"class="labelInput">Cidade</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                        <label for="estado"class="labelInput">Estado</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endeco" class="inputUser" required>
                        <label for="endereco"class="labelInput">Endereço</label>
                </div>
                <br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>

    </div>
</body>
</html>
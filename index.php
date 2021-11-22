<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Projeto Calc</title>
        
        <style>
            * {
                margin: 0;
                padding: 0;
            }

           

            section {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 88vh;
                background-color: tomato;
                
            }

            form div {
                display: flex;
                flex-direction: column;
                margin-bottom: 30px;
            }

            form {
                font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
            }

            .top input {
                margin: 5px;
                border-radius: 25px;
                border: none;
                height: 25px;
                outline: unset;
                padding: 5px;
                
            }

            .one {
                align-items: center;
                justify-content: center;
                margin: 50px;
                
            }

            .one label {
                padding: 12px;
                
            }

            .five input {
                background-color: rgb(112, 245, 232);
                outline: unset;
                border-radius: 15px;
                padding: 5px;
                cursor: pointer;
                color: black;
                border: none;
            }

            .five input:hover {
                background-color: rgb(53, 238, 207);
            }

            header {
                text-align: center;
                align-items: center;
                justify-content: center;
                background-color: turquoise;
                height: 55px;
            }
           
            .dois {
                height: 7vh;
                background-color: turquoise;
            }

            .container_1 {
                background-color: cadetblue;
                padding: 80px;
                border-radius: 20px;
                box-shadow: black;
            }

        </style>
    </head>

    <body>
        <header>
            <h1>Faça seu cálculo</h1>
        </header>

        <section>
        <form action="calcular.php" method="POST">

        <div class="container_1">
            <div class="top">
            <label>
                 Primeiro número: 
                 <input type="text" name="fastNumber" placeholder="Digite um número" required>
            </label>

            <label>
                 Segundo número: 
                 <input type="text" name="secondNumber" placeholder="Digite um outro número" required> 
            </label>
            </div>

            <div class="one">
            <label>
                <input type="radio" id="1" name="operacao" value="Somar">
                Somar
            </label>
            
            <label>
                <input type="radio" id="2" name="operacao" value="Subtrair">
                Subtrair
            </label>
            
            <label>
                <input type="radio" id="3" name="operacao" value="Multiplicar">
                Multiplicar
            </label>
            
            <label>
                <input type="radio" id="4" name="operacao" value="Dividir">
                Dividir
            </label>
            </div>
            
            <div class="five">
            <input type="submit" value="Calcular">
            </div>
        </div>

        </form>
    </section>
    </body>

    <section class="dois">
    <footer>By: Igor</footer>
    </section>

    

</html>


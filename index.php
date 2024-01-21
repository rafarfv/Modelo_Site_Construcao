<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>SoftAsk</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Seu CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Seu CSS -->
</head>

<body>
    <div class="background-container">
        <div class="content">
            <div class="logo">
                <a href="#"><img src="images/icons/logo.png" alt="LOGO" width="300px"></a>
            </div>

            <div class="flex-col-c-m p-l-15 p-r-15 p-t-50 p-b-120">
                <h3>
                    Site em Construção
                </h3>
				<h2>Contagem regressiva</h2>

                <!-- Contagem Regressiva -->
                <div class="countdown">
                    <div class="time">
                        <div class="count" id="mes">00</div>
                        <div id="p-mes">Meses</div>
                    </div>
                    <div class="time">
                        <div class="count" id="dia">00</div>
                        <div id="p-dia">Dias</div>
                    </div>
                    <div class="time">
                        <div class="count" id="hora">00</div>
                        <div id="p-hora">Horas</div>
                    </div>
                    <div class="time">
                        <div class="count" id="minuto">00</div>
                        <div id="p-minuto">Minutos</div>
                    </div>
                    <div class="time">
                        <div class="count" id="segundo">00</div>
                        <div id="p-segundo">Segundos</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Seu JavaScript -->
    <script>
        // Função para atualizar a contagem regressiva
        function atualizarContagemRegressiva() {
            // Data alvo: 29/02/2024 às 23:59
            var dataAlvo = new Date("2024-02-29T23:59:00").getTime();

            // Data atual
            var dataAtual = new Date().getTime();

            // Calcula a diferença em milissegundos
            var diferenca = dataAlvo - dataAtual;

            // Calcula dias, horas, minutos e segundos
            var meses = Math.floor(diferenca / (1000 * 60 * 60 * 24 * 30));
            var dias = Math.floor((diferenca % (1000 * 60 * 60 * 24 * 30)) / (1000 * 60 * 60 * 24));
            var horas = Math.floor((diferenca % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutos = Math.floor((diferenca % (1000 * 60 * 60)) / (1000 * 60));
            var segundos = Math.floor((diferenca % (1000 * 60)) / 1000);

            // Atualiza as divs correspondentes
            document.getElementById("mes").innerText = ("0" + meses).slice(-2);
            document.getElementById("dia").innerText = ("0" + dias).slice(-2);
            document.getElementById("hora").innerText = ("0" + horas).slice(-2);
            document.getElementById("minuto").innerText = ("0" + minutos).slice(-2);
            document.getElementById("segundo").innerText = ("0" + segundos).slice(-2);

            document.getElementById("p-mes").innerText = meses <= 1 ? "Mês" : "Meses";
            document.getElementById("p-dia").innerText = dias <= 1 ? "Dia" : "Dias";
            document.getElementById("p-hora").innerText = horas <= 1 ? "Hora" : "Horas";
            document.getElementById("p-minuto").innerText = minutos <= 1 ? "Minuto" : "Minutos";
            document.getElementById("p-segundo").innerText = segundos <= 1 ? "Segundo" : "Segundos";

        }

        // Atualiza a contagem regressiva a cada segundo
        setInterval(atualizarContagemRegressiva, 1000);

        // Chama a função inicialmente para evitar atrasos na exibição
        atualizarContagemRegressiva();
    </script>
    <!-- Seu JavaScript -->

</body>

</html>

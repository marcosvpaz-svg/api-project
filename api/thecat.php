<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver um gato</title>
</head>
<body>

    <button onclick="getCat()">Ver um gato 🐈‍⬛</button>

    <div id="cat"></div>

    <script>
        async function getCat() {
            try {
                const res = await fetch("https://api.thecatapi.com/v1/images/search");

                const data = await res.json();

                document.getElementById("cat").innerHTML =
                    `<img src="${data[0].url}" width="300" alt="Foto de um gato"/>`;

            } catch (error) {
                alert("Erro ao buscar gato 😺");
            }
        }
    </script>

</body>
</html>

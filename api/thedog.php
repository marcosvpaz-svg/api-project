<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver um Cachorro</title>
</head>
<body>

    <button onclick="getCat()">Ver um cachorro‍ 🐕</button>

    <div id="Dog"></div>

    <script>
        async function getCat() {
            try {
                const res = await fetch("https://api.thedogapi.com/v1/images/search");

                const data = await res.json();

                document.getElementById("Dog").innerHTML =
                    `<img src="${data[0].url}" width="300" alt="Foto de um cachorro"/>`;

            } catch (error) {
                alert("Erro ao buscar gato 🐶");
            }
        }
    </script>

</body>
</html>

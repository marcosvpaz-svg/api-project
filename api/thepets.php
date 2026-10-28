<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver um gato</title>
</head>
<body>

    <button onclick="getCat()">Ver um gato 🐈🐈‍⬛</button>

    <div id="cat"></div>

    <script>
        async function getCat() {
            try {

                const res = await fetch("https://api.thecatapi.com/v1/images/search");

                const data = await res.json();

                document.getElementById("cat").innerHTML = `<img src="${data[0].url}" width="300"/>`;

            } catch (error) {

                alert("Erro ao buscar gato 😿");

            }
        }

    </script>

</body>
</html>

<button onclick="getDog()">Ver um cachorro 🐕</button>

<div id="dog"></div>

<script>
    async function getDog() {
        try {

            const res = await fetch("https://api.thedogapi.com/v1/images/search");

            const data = await res.json();

            document.getElementById("dog").innerHTML = `<img src="${data[0].url}" width="300"/>`;

        } catch (error) {

            alert("Erro ao buscar cachorro 🐶");

        }
    }
</script>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/styles/style.css">
        <title>Php Dischi</title>
    </head>
    <body>
        <main class="container" id="vueContainer">

            <div class="row row-cols-4 g-4" id="cardsContainer">
            <div class="col" v-for="album in albumList" :key="album.id.value">
                <div class="card">
                <img :src="album.poster" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{album.title}}</h5>
                    <div class="card-text">
                        <ul>
                            <li>{{album.author}}</li>
                            <li>{{album.year}}</li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
            </div>
    </main>
    <script src="/milestone2/main.js"></script>
</body>
</html>
<!doctype html>
<html>
<head>
    <title>AvatarMaker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>
<style>
    #a {
        min-height: 100vh;
    }

    body {
        background-image: linear-gradient(to right, #f895ff, #160770, black);
    }

    #header {
        background-color: rgb(0 0 0 / 30%);
        backdrop-filter: blur(10px);
    }

    #submit {
        background-color: rgb(255 255 255 / 30%);
        backdrop-filter: blur(10px);
    }
</style>
<body>
    <div class="d-flex flex-column justify-content-between" id="a">
        <div>
            <div id="header">
                <div class="container text-center d-flex justify-content-between fs-1 text-white fw-bold">
                    <span>
                        <i class="fa-solid fa-users"></i>
                        <span>AvatarMaker</span>
                    </span>
                    <span>
                        <i class="fa-solid fa-bars"></i>
                    </span>
                </div>
            </div>
            <div class="container text-white">
                <div style="max-width: 700px;">
                    <div class="fs-1 fw-bold mt-4 text-black">Сделай свой аватар прямо сейчас</div>
                    <div class="mt-4 fs-3 fw-bold">Давно хотели улучшить свой аккаунт в социальных сетях, но не
                        знали как и где сделать хорошие аватары и баннеры профиля? Тогда вам точно к нам!</div>
                    <form action="AvatarsMaker.php" method = "POST">
                    <label for="selecttype" class="mt-3 fs-4 fw-bold text-black">Тип контента</label><br />
                    <select class="form-select mt-2" aria-label="Default select example" id="selecttype" required>
                        <option selected>Аватар</option>
                        <option value="1">Анимированный аватар</option>
                        <option value="2">Баннер</option>
                        <option value="3">Анимированный баннер</option>
                    </select>
                    <label class="mt-3 fs-4 fw-bold text-black" for="nickname">Никнейм</label><br />
                    <div class="mt-4">
                        <input class="form-control" type="text" id="nickname" placeholder="Введите свой никнейм" name = "nickname"
                            required>
                    </div>
                    <label for="platform" class="mt-3 fs-4 fw-bold text-black">Платформа</label>
                    <i class="fa-brands fa-youtube fs-4 fw-bold text-black"></i>
                    <span class="fs-4 fw-bold text-black">/</span>
                    <i class="fa-brands fa-twitch fs-4 fw-bold text-black"></i>
                    <select class="form-select mt-2" aria-label="Default select example" id="platform" required>
                        <option selected>YouTube</option>
                        <option>Twitch</option>
                    </select>
                    <br /><label for="exampleColorInput" class="mt-3 form-label fs-4 fw-bold text-black"
                        required>Основной
                        цвет</label>
                    <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c"
                        title="Choose your color">
                    <div class="mb-3">
                        <label for="formFile" class="mt-3 form-label fs-4 fw-bold text-black">Выберите фото для
                            основы</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn" id="submit">Создать</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="pb-4 container text-light text-center">© 2024 — Нихаев Дмитрий</div>
    </div>
    <?php
        if(isset($_POST["nickname"])){
            header('Location: http://destination.com')
        }
    ?>
</body>

</html>
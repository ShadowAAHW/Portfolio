<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="main.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <header class="header">
            <a href="#portfolio" class="logo">Portfolio</a>
            <nav class="navbar">
                <a href="#" class="active" style="--t:0s">Home</a>
                <a href="#about" style="--t:.2s">About</a>
                <a href="#spec" style="--t:.4s">Portfolio</a>
                <a href="#portfolio" style="--t:.6s">Work</a>
                <a href="" style="--t:.8s">Feedback</a>
            </nav>
        </header>
        <section class="main_content">
            <div class="main_text">
                <h3>Hello! It's me</h3>
                <h1>Zhdanov Pavel</h1>
                <h3 class="profession">and I'm <span class="multiple-text"></span></h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam, maiores praesentium? Voluptate architecto nisi quo repellat consequatur neque ipsum vel.</p>
                <div class="social">
                    <a href=""><i class='bx bxl-facebook'></i></a>
                    <a href=""><i class='bx bxl-youtube'></i></a>
                    <a href=""><i class='bx bxl-vk' ></i></a>
                    <a href=""><i class='bx bxl-patreon' ></i></a>
                </div>
                <a href="#" class="btn">Download</a>
            </div>
            <div class="photo_wrapper">
                <div class="cut">
                    <div class="photo img"></div>
                </div>
            </div>
        </section>
        <section class="about pad" id="about">
            <div class="photo_wrapper">
                <div class="cut">
                    <div class="photo_ab img"></div>
                </div>
            </div>
            <div class="about_text">
                <div class="about_me">
                    <h2>Who am I?</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Cum dolorum, pariatur illum eius similique soluta alias 
                        iure quia voluptates obcaecati!
                    </p>
                </div>
                <div class="Tasks">
                    <h2>What am I doing?</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Cumque quae laudantium molestias necessitatibus eaque iusto 
                        error, possimus voluptatem! Quidem fugiat illo quis saepe.
                        Adipisci mollitia dolor quasi commodi officia voluptas 
                        sapiente, recusandae, ab consequatur ipsum illum suscipit 
                        est, incidunt amet!
                    </p>
                </div>
            </div>
        </section>
        <section class="specialisation pad" id="spec">
            <h2>My specialisations</h2>
            <div class="tabls">
                <div class="tabl">
                    <a href=""><i class='bx bx-code-alt'></i></a>
                    <div class="spec_info">
                        <h3>Web development</h3>
                        <p class="spec_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, soluta.</p>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>
                <div class="tabl">
                    <a href=""><i class='bx bxs-paint'></i></a>
                    <div class="spec_info">
                        <h3>Graphic design</h3>
                        <p class="spec_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, soluta.</p>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>
                <div class="tabl">
                    <a href=""><i class='bx bx-signal-4'></i></a>
                    <div class="spec_info">
                        <h3>Digital marketing</h3>
                        <p class="spec_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, soluta.</p>
                        <a href="#" class="btn">Download</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="work pad" id="portfolio">
            <h2>My <span>achievments</span></h2>
            <div class="portfolio">
                <div class="work_card">
                    <div class="desk">
                        <a href="#"><i class='bx bx-link-external'></i></a>
                        <h5>Title</h5>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="work_card">
                    <div class="desk">
                        <a href="#"><i class='bx bx-link-external'></i></a>
                        <h5>Title</h5>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="work_card">
                    <div class="desk">
                        <a href="#"><i class='bx bx-link-external'></i></a>
                        <h5>Title</h5>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="work_card">
                    <div class="desk">
                        <a href="#"><i class='bx bx-link-external'></i></a>
                        <h5>Title</h5>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="work_card">
                    <div class="desk">
                        <a href="#"><i class='bx bx-link-external'></i></a>
                        <h5>Title</h5>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="work_card">
                    <div class="desk">
                        <a href="#"><i class='bx bx-link-external'></i></a>
                        <h5>Title</h5>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="feedback pad"> 
            <h3>Write <span>ME!!!</span></h3>
            <form action="send.php" method="post">
                <div class="input_block"> 
                    <input name="FIO" type="text" placeholder="Write Name" required>
                    <input name="email"type="email" placeholder="Write e-mail" required></div>
                <div class="input_block">
                    <input name="phone"type="phone" placeholder="Write phone-number" required>
                    <input name="subject"type="text" placeholder="Write object" required>
                </div>
                <textarea name="message"></textarea>
                <input type="submit" class="btn" value="Отправить">
            </form>
        </section>
    </body>
    <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
    <script src="main.js"></script>
</html>
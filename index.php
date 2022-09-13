<?php
  require "Includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;700&display=swap" rel="stylesheet">

    <!--<link href="https://fonts.googleapis.com/css2?family=Mingzat&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">-->

    <title><?php echo $config['title']; ?></title>
</head>
<body>
    <!--Шапка-->
    <section>
        <div class="wrapper">
            <!--Меню навігації-->
            
            <?php include "Includes/header.php"; ?>

            <!--Фото-слайди-->

            <?php include "Includes/slider.php"; ?>
        
        </div>
    </section>
    <!--Ціль-->
    <section>
        <div class="wrapper">
            <div class="aim-container">
                <div>
                    <h2 class="aim-title">Для чого був створений кооператив
                        “Сади перемоги” та яка мета створення?</h2>
                    <p class="aim-text">Для чого був створений кооператив “Сади перемоги” та яка мета створення? </br>
                        СОК “Сади перемоги” був створений з метою об'єднання учасників ринку сільськогосподарської продукції 
                        з метою спільної закупки всього необхідного для ведення ефективного агровиробництва, навчання членів 
                        кооперативу, вирощування різного виду с/г продукції та реалізації її надлишків.
                    </p>
                </div>
                <img src="img/aim-img.png" alt="aim" class="aim-img">
            </div>
            <div class="membership">
                <p class="aim-text-plus">Кооператив - це не просто магазин для торгівлі добривами, насінням, крапельним зрошенням, комбікормами та 
                    іншими речами, без котрих ведення ефективного сучасного домашнього господарства є неможливим.
                </p>
                <h3 class="aim-title-plus">Кооператив - це не про товар чи рішення, кооператив - це про людей та їхню взаємодію з метою підвищення власної 
                    продуктивності.</h3>
                <p class="aim-text-plus">Наприклад, мішок добрив 50 кг коштує в роздріб 2000 грн. Якщо у нас є 100 членів кооперативу, то нам потрібно 5 тонн селітри на сезон. 
                    Коли кооператив закупить оптом 5 тонн селітри, то це буде значно нижче за роздрібну ціну. Та й транспортні витрати також будуть нижчими.</br>
                    </br>
                    Ось тому і ціни на всі товари для членів кооперативу будуть значно нижчими за роздрібні. Так як наш кооператив є неприбутковою 
                    організацією, то невеликий прибуток, котрий буде залишатися в результаті діяльності, а також ваші членські внески, будуть витрачатися 
                    на наступні послуги:</br>
                    
                    - розробка технологій вирощування різних видів с/г продукції;</br>
                    
                    - розробка типових проектів для членів кооперативу;</br>
                    - навчання сучасним аграрним технологіям;</br>
                    - видання посібників по веденню домашнього господарства;</br>
                    - організація екскурсій до успішних домашніх господарств;</br>
                    - оплата дорадчих та консультаційних послуг.</p>
            </div>
        </div>
    </section>
    <!--Блок фото-->
    <section>
        <div class="wrapper">
            <div class="img-row1">
                <img src="img/aim-img1.png" alt="foto" class="aim-img1">
                <img src="img/aim-img2.png" alt="foto" class="aim-img1">
                <img src="img/aim-img3.png" alt="foto" class="aim-img1">
            </div>
            <div class="img-row2">
                <img src="img/aim-img4.png" alt="foto" class="aim-img1">
                <img src="img/aim-img5.png" alt="foto" class="aim-img1">
                <img src="img/aim-img6.png" alt="foto" class="aim-img1">
            </div>
        </div>
    </section>
    <!--Як стати учасником кооперативу-->
    <section>
        <div class="wrapper">
            <div class="membership">
                <h1 class="member">Які варіанти участі в кооперативі і що це дає?</h1>
                <!--<p class="variants-text">Варіантів на даний момент є кілька видів:</p>-->
            </div>
            <div class="string"></div>
            <div class="member-vars">
                <div class="var-card">
                    <!--<img src="img/var-card.png" alt="" class="var-card-img">-->
                    <h3 class="var-card-title">Член кооперативу</h3>
                    <ul class="var-card-list">
                        <li class="var-card-list-item"> <span class="var-card-text">знижки на продукцію</span> </li>
                        <li class="var-card-list-item"> <span class="var-card-text">доступ до типових проектів</span> </li>
                        <li class="var-card-list-item"> <span class="var-card-text">доступ до навчальних програм та всіх заходів</span> </li>
                        <li class="var-card-list-item"> <span class="var-card-text">участь у спільній реалізації вирощеної продукції</span> </li>
                    </ul>
                    <h4 class="var-card-price">Внесок на 1 рік становить 3000 грн</h4>
                    <button class="var-card-submit">
                        <img src="img/handshake.svg" alt="" class="submit-img">
                        <a href="../pages/membership.php" class="referal"><span class="submit-text">Стати учасником</span></a>
                    </button>
                </div>
                <div class="var-card">
                    <!--<img src="img/var-card.png" alt="" class="var-card-img">-->
                    <h3 class="var-card-title">Пайщик кооперативу</h3>
                    <ul class="var-card-list">
                        <li class="var-card-list-item"> <span class="var-card-text">інвестує в проекти кооперативу</span> </li>
                        <li class="var-card-list-item"> <span class="var-card-text">бере участь в організації роботи кооперативу</span> </li>
                    </ul>
                    <h4 class="var-card-price">Вартість залежить від вартості проекту</h4>
                    <button class="var-card-submit">
                        <img src="img/handshake.svg" alt="" class="submit-img">
                        <span class="submit-text">Перегляд проектів</span>
                    </button>
                </div>
                <div class="var-card">
                    <!--<img src="img/var-card.png" alt="" class="var-card-img">-->
                    <h3 class="var-card-title">Асоційований член кооперативу</h3>
                    <ul class="var-card-list">
                        <li class="var-card-list-item"> <span class="var-card-text">інвестує в проекти</span> </li>
                        <li class="var-card-list-item"> <span class="var-card-text">бере участь в роботі СОК</span> </li>
                        <li class="var-card-list-item"> <span class="var-card-text">має право відкривати філії</span> </li>
                    </ul>
                    <h4 class="var-card-price">Вартість залежить від вартості проекту</h4>
                    <button class="var-card-submit">
                        <img src="img/handshake.svg" alt="" class="submit-img">
                        <span class="submit-text">Сьогодні почати</span>
                    </button>
                </div>
                <div class="var-card">
                    <!--<img src="img/var-card.png" alt="" class="var-card-img">-->
                    <h3 class="var-card-title">Споживач</h3>
                    <ul class="var-card-list">
                        <li class="var-card-list-item"> <span class="var-card-text">має можливість першочергового замовлення продукції кооперативуї</span> </li>
                    </ul>
                    <h4 class="var-card-price">Внесок на 1 рік становить 4000 грн</h4>
                    <button class="var-card-submit">
                        <img src="img/handshake.svg" alt="" class="submit-img">
                        <a href="../pages/shop.php" class="referal"><span class="submit-text">Більше про асортимент</span></a>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!--Команда-->
    <section>
        <div class="wrapper">
            <div class="team">
                <h1 class="team-title">Наша команда</h1>
                <div class="team-members">
                    <div class="team-member-card">
                        <img src="img/gaidamaka.png" alt="foto" class="team-member-img">
                        <h3 class="team-member-name">Любомир</br>Гайдамака</h3>
                        <p class="tyre">_</p>
                        <p class="team-member-bio">голова правління СОК "Сади перемоги". Відповідає за розвиток кооперативу, розробку навчальних 
                            програм, фінансування, а також за розвиток аквакультури.</p>
                        <div class="social">
                            <a href="https://facebook.com"><img src="img/facebook.png" alt="facebook" class="social-icon"></a>
                            <a href="https://instagram.com"><img src="img/instagram.png" alt="instagram" class="social-icon"></a>
                            <a href="https://linkedin.com"><img src="img/in.png" alt="linkedin" class="social-icon"></a>
                        </div>
                    </div>
                    <div class="team-member-card">
                        <img src="img/zavgorodnii.png" alt="foto" class="team-member-img">
                        <h3 class="team-member-name">Максим</br>Завгородній</h3>
                        <p class="tyre">_</p>
                        <p class="team-member-bio">засновник кооперативу. Відповідає за монтаж систем капельного зрошування, логістику, надання послуг 
                            членам кооперативу.</p>
                        <div class="social">
                            <a href="https://facebook.com"><img src="img/facebook.png" alt="facebook" class="social-icon"></a>
                            <a href="https://instagram.com"><img src="img/instagram.png" alt="instagram" class="social-icon"></a>
                            <a href="https://linkedin.com"><img src="img/in.png" alt="linkedin" class="social-icon"></a>
                        </div>
                    </div>
                    <div class="team-member-card">
                        <img src="img/viahirev.png" alt="foto" class="team-member-img">
                        <h3 class="team-member-name">Сергій</br>Вяхірєв</h3>
                        <p class="tyre">_</p>
                        <p class="team-member-bio">засновник кооперативу. Відповідає за проектування тепличних господарств, монтаж та будівництво теплиць, 
                            кролеферм тощо.</p>
                        <div class="social">
                            <a href="https://facebook.com"><img src="img/facebook.png" alt="facebook" class="social-icon"></a>
                            <a href="https://instagram.com"><img src="img/instagram.png" alt="instagram" class="social-icon"></a>
                            <a href="https://linkedin.com"><img src="img/in.png" alt="linkedin" class="social-icon"></a>
                        </div>
                    </div>
                    <div class="team-member-card">
                        <img src="img/vladymyrskii.png" alt="foto" class="team-member-img">
                        <h3 class="team-member-name">Олександр</br>Владимирський</h3>
                        <p class="tyre">_</p>
                        <p class="team-member-bio">засновник кооперативу. Відповідає за фінансування, а також розвиток вівчарства.</p>
                        <div class="social">
                            <a href="https://facebook.com"><img src="img/facebook.png" alt="facebook" class="social-icon"></a>
                            <a href="https://instagram.com"><img src="img/instagram.png" alt="instagram" class="social-icon"></a>
                            <a href="https://linkedin.com"><img src="img/in.png" alt="linkedin" class="social-icon"></a>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>
    <!--Проекти-->
    <section>
        <div class="wrapper">
            <div class="projects">
                <h1 class="projects-title">Наші проекти</h1>
                <div class="pro3">
                    <div class="project-card3">
                        <img src="img/teplycia-icon.png" alt="icon" class="project-icon">
                        <h4 class="pr-title">Теплиці</h4>
                        <p class="pr-descr3">Тепли́ця — конструкція зі стінами та дахом, зроблена з прозорого матеріалу, 
                            такого як скло, в яких вирощують рослини, які потребують регульованих кліматичних умов. 
                            Ці конструкції розміром від невеликих до промислових приміщень. Мініатюрна теплиця відома 
                            як парник.</p>
                        <a href="#"><button class="pr-page">Далі</button></a>
                    </div>
                    <div class="project-card3">
                        <img src="img/rebbit-icon.png" alt="icon" class="project-icon">
                        <h4 class="pr-title">Вирощування кроликів</h4>
                        <p class="pr-descr3">Для відкриття такого бізнесу потрібні мінімальні капіталовкладення. Для ферми, 
                            на якій буде вирощуватися 1000 особин, потрібна площа навіть менше стандартної ділянки в 6 соток. 
                            Заощадити кошти можна, зробивши своїми руками клітки, поїлки для кролів й кормушки.</p>
                        <a href="#"><button class="pr-page">Далі</button></a>
                    </div>
                    <div class="project-card3">
                        <img src="img/chicken-icon.png" alt="icon" class="project-icon">
                        <h4 class="pr-title">Птиця на м’ясо</h4>
                        <p class="pr-descr3">Срок вирощування бройлерів в домашніх умовах скорочується, і в цьому криється 
                            основна перевага цієї породи курей. Вирощування бройлерів в домашніх умовах можна назвати дуже 
                            прибутковим. За дуже короткий срок при дотриманні всіх правил догляду та годування птиці ми 
                            отримуємо дорослу особину.</p>
                        <a href="#"><button class="pr-page">Далі</button></a>
                    </div>
                </div>
                <div class="pro2">
                    <div class="project-card2">
                        <img src="img/fishing-icon.png" alt="icon" class="project-icon">
                        <h4 class="pr-title">Вирощування форелі</h4>
                        <p class="pr-descr2">Досвід нашої команди професіоналів – це 15 років інтенсивної роботи у напрямку 
                            розвитку та популяризації аквакультури в Україні. У своїй роботі та запропонованих рішеннях ми 
                            консолідуємо досвід цілих поколінь фахівців, що працюють у сфері розвитку аквакультури у всіх 
                            куточках земної кулі.</p>
                        <a href="#"><button class="pr-page">Далі</button></a>
                    </div>
                    <div class="project-card2">
                        <img src="img/egg-icon.png" alt="icon" class="project-icon">
                        <h4 class="pr-title">Птиця на яйця</h4>
                        <p class="pr-descr2">За останні 5 років виробництво яєць в Україні зросло на 15,2 %, і досягло 
                            19,6 млрд шт. у 2014 р., що цілком задовольняє науково обґрунтовані потреби споживання населенням 
                            цього вкрай важливого харчового продукту (діагр. 3).</p>
                        <a href="#"><button class="pr-page">Далі</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Підвал-->
    <section>
        <div class="wrapper">

        <?php include "Includes/footer.php"; ?>
        
        </div>
    </section>
</body>
</html>

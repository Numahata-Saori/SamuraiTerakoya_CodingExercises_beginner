<!DOCTYPE html>
<html lang="ja">

<head>
  <title>Web Entertainment Design</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- リセットcss -->
  <!-- <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css"/> -->
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header>
    <div class="menu wrapper">
      <h1 class="logo">
        <a href="index.php"><img src="img/logo.svg" alt=""></a>
      </h1>
      <!-- PC用ナビゲーション -->
      <nav class="">
        <ul>
          <li><a href="#news">NEWS</a></li>
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#business">BUSINESS</a></li>
          <li><a href="#company">COMPANY</a></li>
        </ul>
      </nav>
    </div>
    <a class="contact" href="#">資料請求</a>
  </header>

  <main>
    <article>
      <div id="mainvisual">
        <img src="img/mainvisual.jpg" alt="">
      </div>

      <section id="news" class="wrapper">

        <h2 class="section-title">
          <span class="en">NEWS</span>
          <span class="ja">ニュース</span>
        </h2>

        <ul class="news-list">

          <li>
            <div class="news-date">
              <div class="news-time">
                <?php
                date_default_timezone_set('Asia/Tokyo');
                echo date('Y.n.j', strtotime('8 March 2023')) . '<br>';
              ?>
              </div>
              <span>NEWS</span>
            </div>
            <p>シン・エヴァンゲリオン劇場版 EVANGELION:3.0+1.11 THRICE UPON A TIME 発売</p>
          </li>

          <li>
            <div class="news-date">
              <div class="news-time">
                <?php
                date_default_timezone_set('Asia/Tokyo');
                echo date('Y.n.j', strtotime('13 September 2000')) . '<br>';
                ?>
              </div>
              <span>PRESS</span>
            </div>
            <p>セカンドインパクト</p>
          </li>

          <li>
            <div class="news-date">
              <div class="news-time">
                <?php
                date_default_timezone_set('Asia/Tokyo');
                echo date('Y.n.j', strtotime('8 December 1986')) . '<br>';
              ?>
              </div>
              <span>NEWS</span>
            </div>
            <p>葛城ミサト誕生</p>
          </li>

        </ul>
      </section>

      <section id="about">
        <div class="about-img">
          <img src="img/about.jpg" alt="">
        </div>
        <div class="about-exp">
          <h2 class="section-title">
            <span class="en">ABOUT</span>
            <span class="ja">私たちについて</span>
          </h2>
          <p>WILLE、その目的は全NERV製エヴァンゲリオンの殲滅、及びフォースインパクト発動の阻止</p>
          <p>ヴィレ艦隊及び本組織の象徴とも言えるAAAヴンダーを旗艦とした多数の駆逐艦、空母、巡洋艦などの混成艦隊を持つ。</p>
          <p>終盤の「ヤマト作戦」ではNERV本部施設への攻撃手段としてブースターが増設され誘導弾化された巡洋艦が登場</p>
        </div>
      </section>

      <section id="business" class="wrapper">
        <h2 class="section-title">
          <span class="en">BUSINESS</span>
          <span class="ja">ビジネス</span>
        </h2>
        <div class="business-detail">
          <div  class="business-detail_left">
            <div class="project">
              <p class="project-title">Web制作・マーケティング</p>
              <img src="img/business1.jpg" alt="">
            </div>
            <div class="project">
              <p class="project-title">インターネットメディア事業</p>
              <img src="img/business2.jpg" alt="">
            </div>
          </div>
          <div class="business-detail_right">
            <div class="project">
              <p class="project-title">プロモーション企画・制作</p>
              <img src="img/business3.jpg" alt="">
            </div>
            <div class="project">
              <p class="project-title">ソーシャル企画・運営</p>
              <img src="img/business4.jpg" alt="">
            </div>
          </div>
        </div>
      </section>

      <section id="company" class="wrapper">
        <div class="company-detail">
          <h2 class="section-title">
            <span class="en">COMPANY</span>
            <span class="ja">会社概要</span>
          </h2>

          <dl class="aaa">
            <dt>会社名</dt>
            <dd>ウェブエンターテイメントデザイン株式会社</dd>
            <dt>所在地</dt>
            <dd>東京都渋谷区桜丘町99-9 West Building 3F</dd>
            <dt>代表</dt>
            <dd>葛城ミサト</dd>
            <dt>設立</dt>
            <dd>2021年1月1日</dd>
            <dt>資本金</dt>
            <dd>3,000,000円</dd>
            <dt>事業内容</dt>
            <dd>Web制作・マーケティング</dd>
            <dd class="add">インターネットメディア事業</dd>
            <dd class="add">プロモーション企画・制作</dd>
            <dd class="add">ソーシャル企画・運営</dd>
          </dl>
        </div>

        <div class="business-img">
          <img src="img/company.jpg" alt="">
        </div>
      </section>
    </article>
  </main>

  <footer id="footer">
    <div class="wrapper">
      <div class="footer-cont">
        <div class="logo">
          <img src="img/logo.svg" alt="">
        </div>
        <div class="company-info">
          <p>
            Web Entertainment Design Inc.<br>
            West Building 3F<br>
            9-99 Sakuragaokacho Shibuya-ku<br>
            Tokyo, Japan 150-0031 <br>
          </p>
          <p>T/99-9999-9999</p>
        </div>
      </div>
      <span id="copyright">&copy;Web Entertainment Design Inc.</span>
    </div>
  </footer>
</body>
</html>
